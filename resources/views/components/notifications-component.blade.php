<li class="nav-item dropdown dropdown-notification me-25">
    <a class="nav-link" href="#" data-bs-toggle="dropdown">
        <i class="ficon" data-feather="bell"></i>
        <span class="badge rounded-pill bg-danger badge-up badge-up-refresh">
            <div id="notifyPill1">
                {{ $all_notifications->where('read_at', null)->count() }}
            </div>
        </span>
    </a>

    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end notifications-dropdown">
        <li class="dropdown-menu-header">
            <div class="dropdown-header d-flex">
                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                <div class="badge rounded-pill badge-light-primary badge-refresh">
                    <div id="notifyPill2">{{ $all_notifications->where('read_at', null)->count() }} New</div>
                </div>
            </div>
        </li>

        <li class="scrollable-container media-list">
            <div id="notifications">
                @foreach ($all_notifications as $notification)
                    <a class="d-flex" href="#">
                        <div class="list-item d-flex align-items-start">
                            <div class="me-1">
                                <div class="avatar"><img
                                        src="{{ asset('images/' . $notification->data['avatar']) }}" alt="avatar"
                                        width="32" height="32"></div>
                            </div>
                            <div class="list-item-body flex-grow-1">
                                <p class="media-heading"><span
                                        class="fw-bolder">{{ $notification->data['heading'] }}</span>
                                    @if ($notification->read_at == null)
                                        <span class="badge rounded-pill badge-light-danger">
                                            Unread </span>
                                    @endif
                                </p>
                                <small class="notification-text"> {{ $notification->data['details'] }}</small>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </li>
        <li class="dropdown-menu-footer">
            <button class="btn btn-primary w-100 mark-read" @if ($all_notifications->where('read_at', null)->count() == 0) disabled @endif>
                <span class="spinner-border spinner-border-sm btn-load-spinner" role="status" aria-hidden="true"
                    style="display: none"></span>
                Mark all as read</button>
        </li>
    </ul>
</li>
@push('extended-js')
    <script>
        let markReadRoute = '{{ $markReadRoute }}';
    </script>
    <script src="{{ asset('assets/js/custom/notifications/main.js') }}"></script>
@endpush
