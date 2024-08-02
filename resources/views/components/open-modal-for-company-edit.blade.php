      <!-- Modal -->
      <div class="modal fade text-start" id="ModalForcompanyEdit" tabindex="-1" aria-labelledby="myModalLabel1"
          aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel1">Company Edit Modal</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form id="UpdateNewCompanyForm" novalidate>
                    
                      <section id="multiple-column-form">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-4 col-12">
                                      <div class="mb-1">
                                          <label class="form-label" for="name">Name</label>
                                          <input type="text" id="name" class="form-control" placeholder="Some name"
                                              name="name" required>
                                              <input type="hidden" id="id" class="form-control" placeholder="Some name"
                                              name="id" required>
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-12">
                                      <div class="mb-1">
                                          <label class="form-label" for="email">Email</label>
                                          <input type="email" id="email" class="form-control"
                                              placeholder="Some Email Address" name="email" required>
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-12">
                                      <div class="mb-1">
                                          <label class="form-label" for="email">Existance Name</label>

                                          <input type="text" id="existance_name" class="form-control"
                                              placeholder="Name in Company-Existance-File" name="existance_name" required>
                                          <small>Name that is written in file that stats which company work in which
                                              state</small>
                                      </div>
                                  </div>


                                  <div class="col-md-12 col-12">
                                      <div class="mb-1">
                                          <label class="form-label" for="email">Company Description</label>
                                          <textarea type="text" id="description" rows="10" class="form-control" placeholder="Some Description..."
                                              name="description"></textarea>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12 col-12">
                                      <div class="mb-1">
                                          <label class="form-label" for="address">Address</label>
                                          <input type="text" id="address" class="form-control"
                                              placeholder="Some addreess" name="address">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="mb-1">
                                          <label class="form-label" for="city">Primary Contact</label>
                                          <input type="number" id="primary_contact" class="form-control"
                                              placeholder="Some Primary Contact #" name="primary_contact" required>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="mb-1">
                                          <label class="form-label" for="secondary_contact">Some Secodary Contact
                                              #</label>
                                          <input type="number" id="secondary_contact" class="form-control"
                                              placeholder="Some Secondary Contact #" name="secondary_contact">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="mb-1">
                                          <label class="form-label" for="secondary_contact">Function Name
                                          </label>
                                          <small class="text-muted">Function Name is used in fileimprt..General name is: importGeneralFile</small>
                                          <input type="text" id="func_name" class="form-control"
                                              placeholder="function_name #" name="func_name" required>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="mb-1">
                                          <label class="form-label" for="image">Company Image</label>
                                          <small class="text-muted">It is recommended to upload an image with high
                                              width.</small>
                                          <input type="file" id="image" class="form-control"
                                              placeholder="Select a company image" name="image" >
                                      </div>
                                  </div>

                              </div>
                              <div class="row">
                               
                              
                                  <img src="" alt="Company Image" id="old_img" style="height:200px;width:100%">
                           

                            </div>
                            <button type="submit" id="open_modal_for_company_submit" class="form-control btn btn-primary">Update</button>
                          </div>



                      </section>
                  </form>




              </div>
          </div>
      </div>
