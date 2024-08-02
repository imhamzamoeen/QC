     <!-- Advanced Search -->
     <section id="advanced-search-datatable">
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     
                     <hr class="my-0" />
                     <div class="card-datatable">

                         <table class="dt-advanced-search table datatables-conf">
                             <thead>
                                 <tr>
                                     <th></th>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Type</th>
                                     <th>Status</th>
                                     <th>Edit</th>
                                     <th>Delete</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @forelse ($users as $user)
                                     <tr>
                                         <td>
                                             <div class="img-hover-zoom--blur"><img class="img-hover-zoom--brightness"
                                                     onerror="this.onerror=null;this.src='{{ asset('images/users/QC_default.png') }}';"
                                                     src="{{ asset('images/users') }}/{{ $user->UserAttributes->image }}"
                                                     alt="{{ $user->name }}"
                                                     style="width:100px;height:100px;border-radius:50px"></div>
                                         </td>
                                         <td>{{ $user->name }}</td>
                                         <td>{{ $user->email }}</td>
                                         <td>{{ $user->UserAttributes->user_type }}</td>
                                         <td>{{ $user->UserAttributes->status }}</td>
                                         <td><button type="button" class="btn btn-relief-warning "
                                                 onclick="Edit_User({{ $user }})">Edit</button></td>
                                         <td><button type="button" class="btn btn-relief-danger bx-flashing-hover"
                                                 onclick="delete_User('{{ $user->id }}')">delete</button></td>
                                     </tr>
                                 @empty
                                 @endforelse
                             </tbody>
                         </table>
                      
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--/ Advanced Search -->

     @push('extended-js')
     <script>
         $('.datatables-conf').DataTable();
     </script>
     @endpush