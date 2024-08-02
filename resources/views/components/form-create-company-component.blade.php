<form id="addNewCompanyForm" novalidate>
    <section id="multiple-column-form">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Enter name" name="name"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="Enter Email Address"
                                    name="email">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="email">Existance Name</label>
                             
                                <input type="text" id="existance_name" class="form-control" placeholder="Name in Company-Existance-File"
                                    name="existance_name">
                                    <small>Name that is written in file that stats which company work in which state</small>
                            </div>
                        </div>


                        <div class="col-md-12 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="email">Company Description</label>
                                <textarea type="text" id="description" rows="10" class="form-control"
                                    placeholder="Enter Description..." name="description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="address">Address</label>
                                <input type="text" id="address" class="form-control" placeholder="Enter addreess"
                                    name="address">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="city">Primary Contact</label>
                                <input type="number" id="primary_contact" class="form-control" 
                                    placeholder="Enter Primary Contact #" name="primary_contact">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="secondary_contact">Some Secodary Contact
                                    #</label>
                                <input type="number" id="secondary_contact" class="form-control" 
                                    placeholder="Enter Secondary Contact #" name="secondary_contact">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="image">Company Image</label>
                                <small class="text-muted">It is recommended to upload an image with high
                                    width.</small>
                                <input type="file" id="image" class="form-control"
                                    placeholder="Select a company image" name="image" required>
                            </div>
                        </div>

                    </div>
                </div>

            
       
    </section>
</form>


