<section class="booking-form-section" id="booking-engine">
        <article class="container">
          <div class="enqiure-inner">
            <div class="row">
               <div class="custom-form-outer-div">
                  <span>Check In Date</span>
                  <div class="input-group date" data-provide="datepicker">
                     <input type="text" class="form-control" id="checkdate1" placeholder="Check In Date" name="fromdate" readonly="">
                  </div>
               </div>
               <div class="custom-form-outer-div">
                  <span>Check Out Date</span>
                  <div class="input-group date" data-provide="datepicker">
                     <input type="text" class="form-control" id="checkdate2" placeholder="Check Out Date" name="todate" readonly="">
                  </div>
               </div>
            
               <div class="custom-form-outer-div">
                <span>Room</span>
                <select class="form-select" id="roomId" aria-label="Default select example">
                   <option value="1" selected>1 Room</option>
                   <option value="2">2 Room</option>
                   <option value="3">3 Room</option>
                   <option value="4">4 Room</option>
                </select>
             </div>
               <div class="custom-form-outer-div">
                  <span>Adults</span>
                  <select class="form-select" id="adultId" aria-label="Default select example">
                     <option value="1" selected>1 Adults</option>
                     <option value="2">2 Adults</option>
                     <option value="3">3 Adults</option>
                     <option value="4">4 Adults</option>
                  </select>
               </div>
              
               <div class="custom-form-outer-div btn-div">
                  <span>&nbsp;</span>
                  <button type="submit" class="btn btn-primary w-100" onclick="checkavailability();">Check Availability</button>
               </div>
            </div>
         </div>
        </article>
    </section>