  <!-- Add Role Modal -->
  <div class="modal fade" id="editpolicymanagmentmodal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
          <div class="modal-content">
              <div class="modal-header bg-transparent">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body px-5 pb-5">
                  <div class="text-center mb-4">
                      <h1 class="role-title">Edit Policy Data</h1>
                      <p>Update Policy information </p>
                  </div>
                  <!-- Add role form -->
                  <form id="usercompanyaddform" enctype="multipart/form-data"  novalidate>
                   @method('PUT')
                      <div class="block">
                          <div class="block-header block-header-default">
                              <h3 class="block-title">Policies of Insurance Companies</h3>
                              <div class="block-options">
                                  <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                  <button type="button" data-bs-dismiss="modal"
                                      class="btn btn-sm btn-primary">Cancel</button>

                              </div>
                          </div>
                          <div class="block-content">
                            <div class="row justify-content-center py-sm-3 py-md-5">

                                <div class="form-group col-md-6">
                                    <label for="Certificate">Company</label>
                                    <select class="form-select select2" name="company" id="company_field" required>
                                        <option label="" disabled >Select a Company </option>
                                        @foreach ($all_companies as $eachcompany)
                                        <option value="{{$eachcompany->id}}">{{$eachcompany->name}}</option>                                            
                                        @endforeach
                                    </select>
                                    <small>The policy will belong to the selected company</small>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="Certificate">Name</label>
                            
                                   <input type="text" id="policy_name_field" name="policy_name" class="form-control form-input" required>
                                   <input type="hidden" id="policy_id" name="policy_id" class="form-control form-input" required>
                                   <small>Change the name accoring to file</small>
                                </div>
                             
                            </div>

                              <div class="row justify-content-center py-sm-3 py-md-5">

                                  <div class="form-group col-md-6">
                                      <label for="Certificate">Policy Type</label>
                                 
                                      <select class="form-select select2" name="policy_type" id="policy_type" required> 
                                          <option label="" disabled >Select a Policy type </option>
                                          <option value="whole">Whole Life</option>
                                          <option value="term">Term Life</option>
                                      </select>
                                      <small>Selected would be the new policy type</small>
                                  </div>

                                  <div class="form-group col-md-6">
                                      <label for="Certificate">Level</label>
                                      <select class="form-select select2" name="policy_level" id="policy_level" required>
                                          <option label="" disabled >Select Level </option>
                                          <option value="immediate">Immediate</option>
                                          <option value="graded">Graded</option>
                                          <option value="ROP2Y">ROP 2 Years</option>
                                          <option value="ROP3Y">ROP 3 Years</option>
                                          <option value="limited">10pay/20pay/Limited</option>
                                          <option value="term">Term</option>
                                      </select>
                                      <small>Selected would be the level of given policy</small>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
