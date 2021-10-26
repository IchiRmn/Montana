<!-- ======= Form Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container" >

      <div class="section-title"  data-aos="fade-up">
        <p>Member Form</p>
      </div>  
         @for ($i = 1; $i <= $member ; $i++)
        <div data-aos="fade-up">
            
            <div class="section-title"  style="padding-bottom: 20px; padding-top: 50px;">
            <h2>Member {{ $i }}</h2>
            </div>

            <div class="row regist">

                <div class="col-lg-4 col-md-6 mb-4 form-floating">        
                    <input type="text" name="identityNumber[]" id="identityNumber" value="{{ old('identityNumber') }}" autocomplete="name" placeholder=" "  class="form-control btn-light" required>
                    <label for="identityNumber" style="">Identity Number (KTP, SIM, etc)</label>        
                    <div class="invalid-tooltip">
                        Please enter a valid data! (ex: 200056677)
                    </div>  
                    <div class="valid-tooltip">
                        Excellent!   
                    </div>         
                </div>

                <div class="col-lg-4 col-md-6 mt-3 mt-md-0 mb-4 form-floating">
                    <input type="email" name="email[]" id="email"  value="{{ old('email') }}" autocomplete="email" placeholder=" "  class="form-control btn-light" required>
                    <label for="email" >Email address</label>
                    <div class="invalid-tooltip">
                        Please enter a valid email! (ex: james@gmail.com)
                    </div>  
                    <div class="valid-tooltip">
                        Excellent! 
                    </div> 
                </div>

                <div class="col-lg-4 col-md-6 mt-3 mt-md-0 mb-4 form-floating">
                    <input type="tel"  name="phone[]" id="phone" value="{{ old('phone') }}" autocomplete="phone" placeholder=" " class="form-control btn-light" pattern="[+][0-9]{9,13}" required>
                    <label for="phone" >Phone Number</label>
                    <div class="invalid-tooltip">
                        Use '+' with maximum 13 number! (ex: +6288333009942)
                    </div>  
                    <div class="valid-tooltip">
                        Excellent! 
                    </div>    
                </div>

                <div class="col-lg-4 col-md-6 mt-3 mb-4 form-floating">
                    <input type="text"  name="name[]" id="name" value="{{ old('name') }}"  autocomplete="name" placeholder=" " class="form-control btn-light" required>
                    <label for="name" >Your Name</label>
                    <div class="invalid-tooltip">
                       Please enter your name (ex: LeBron James)
                    </div>  
                    <div class="valid-tooltip">
                        Excellent! 
                    </div>   
                </div>

                <div class="col-lg-4 col-md-6 mt-3 mb-4 form-floating">
                    <input type="date" name="birthdate[]" id="birthdate" value="{{ old('birthdate') }}" autocomplete="birthdate" placeholder=" " class="form-control btn-light" required>
                    <label for="birthdate">Date Of Birth</label>
                    <div class="invalid-tooltip">
                       Please select your birth date
                     </div>  
                     <div class="valid-tooltip">
                         Excellent! 
                     </div>  
                </div> 

                <div class="col-lg-4 col-md-6 mt-3 mb-4 form-floating">   
                    <select name="gender[]" id="gender" autocomplete="gender" class="form-select btn-light" aria-label="Floating label select example" required>
                        <option value="">Choose</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <label for="gender" >Gender</label>
                    <div class="invalid-tooltip">
                        Please select your gender
                      </div>  
                      <div class="valid-tooltip">
                          Excellent! 
                      </div>
                </div> 

                <div class="mt-3 form-floating col-sm-6" style="margin-bottom: 50px;">
                    <textarea name="address[]" id="address" value="{{ old('name') }}" autocomplete="address" placeholder=" " class="form-control btn-light" style="height: 100px;" required minlength="4"></textarea>
                    <label for="addres" >Address</label>
                    <div class="invalid-tooltip">
                        Please enter a valid address (ex: Amet Street
                        Corona Oklahoma 55246)
                      </div>  
                      <div class="valid-tooltip">
                          Excellent! 
                      </div> 
                </div>

                <div class="col-lg-4 col-md-6 mt-3 mb-4 form-floating"> 
                    <div class="input-group" >
                        <input type="file" class="form-control" style="height: 88px; padding-top: 45px; " name="selfie[]" id="selfie" value="{{ old('selfie') }}" autocomplete="selfie" placeholder=" " aria-describedby="inputGroupFileAddon03" aria-label="Upload" required>
                        <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon03" data-bs-toggle="modal" data-bs-target="#photo">Example</button>
                    </div>
                    <label for="selfie" style="padding-top: 0px; margin-top: 7px;">Selfie with identity card</label>
                    <small style="font-size: 12px" class="text-secondary">This function isn't working properly</small>
                    <div class="invalid-tooltip">
                        Please select your image, maximum 2 mb
                      </div>  
                      <div class="valid-tooltip">
                          Excellent! 
                      </div>
                </div> 
      
                <input type="text" name="idMount" id="idMount" value={{ $id }} hidden>
                <input type="text" name="dateStart" id="dateStart" value={{ $date }} hidden>
                <input type="text" name="member" id="member" value={{ $member }} hidden>
                
            </div> 
               
        </div>
        @endfor

        
        <div class="d-grid gap-2 col-6 mx-auto mt-7" style="margin-top: 60px" data-aos="fade-up">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#confirm">
                Register
            </button>
        </div>
        @include('modals.confirm')
        
    </div>
</section><!-- End Form Section -->
</form>
@include('modals.example')

