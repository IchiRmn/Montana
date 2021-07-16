<!-- ======= Form Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container" >

      <div class="section-title">
        <p>Form Member</p>
      </div>  
         @for ($i = 1; $i <= $member ; $i++)
        <div data-aos="fade-up">
            
            <div class="section-title" style="padding-bottom: 20px;">
            <h2>Member {{ $i }}</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 form-floating">        
                    <input type="text" name="identityNumber" id="identityNumber"  value = "" autocomplete="name" placeholder=" "  class="form-control btn-light " style="height: 60px; background-color: #0c0b09; color: white">
                    <label for="identityNumber" style="margin-left: 10px; font-size: 14px; color: rgb(182, 182, 182)">Identity Number (KTP, SIM, etc)</label>        
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>                
                </div>

                <div class="col-lg-4 col-md-6 mt-3 mt-md-0 mb-4 form-floating">
                    <input type="email" name="email[]" id="email"  value="" autocomplete="email" placeholder=" "  class="form-control btn-light"  style="height: 60px; background-color: #0c0b09; color: white">
                    <label for="email" style="margin-left: 10px; font-size: 14px; color: rgb(182, 182, 182)">Email address</label>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3 mt-md-0 form-floating">
                    <input type="text"  name="phone" id="phone" value="" autocomplete="phone" placeholder=" " class="form-control btn-light" style="height: 60px; background-color: #0c0b09; color: white">
                    <label for="phone" style="margin-left: 10px; font-size: 14px; color: rgb(182, 182, 182)">Phone Number</label>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3 mb-4 form-floating">
                    <input type="text"  name="name[]" id="name" value=""  autocomplete="name" placeholder=" " class="form-control btn-light" style="height: 60px; background-color: #0c0b09; color: white" >
                    <label for="name" style="margin-left: 10px; font-size: 14px; color: rgb(182, 182, 182)">Your Name</label>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-3 form-floating">
                    <input type="date" name="birthdate" id="birthdate" value="birthdate" autocomplete="birthdate" placeholder=" " class="form-control btn-light" style="height: 60px; background-color: #0c0b09; color: white">
                    <label for="birthdate" style="margin-left: 10px; color: rgb(182, 182, 182)">Birthdate</label>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div> 

                <div class="col-lg-4 col-md-6 mt-3 form-floating">   
                    <select name="gender" id="gender" autocomplete="gender" class="form-select btn-light" aria-label="Floating label select example" style="height: 60px; background-color: #0c0b09; color: white;" >
                    <option value="Male">Male</option>
                    <option value="Famale">Female</option>
                    </select>
                    <label for="gender" style="margin-left: 10px; color: rgb(182, 182, 182)">Gender</label>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div> 

                <div class="mt-3 form-floating col-sm-6" style="margin-bottom: 100px;">
                    <textarea name="address" id="address" value="" autocomplete="address" placeholder=" " class="form-control btn-light" style="height: 100px; background-color: #0c0b09; color: white"></textarea>
                    <label for="addres" style="margin-left: 10px; color: rgb(182, 182, 182)">Address</label>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                
                <input type="text" name="idMount" id="idMount" value={{ $id }} hidden>
                <input type="text" name="dateStart" id="dateStart" value={{ $date }} hidden>
                <input type="text" name="member" id="member" value={{ $member }} hidden>
                
            </div> 
             
            
        </div>
        @endfor
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#confirm">
                Register
            </button>
        </div>
        @include('modals.confirm')
    </div>
</section><!-- End Form Section -->
</form>