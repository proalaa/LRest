<div class="ftco-section-reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 reservation pt-5 px-5">
            <div class="block-17">
              <form action="/reservation " method="post" class="d-block d-lg-flex">

                @csrf

                <div class="fields d-block d-lg-flex">

                  <div class="textfield-name one-third"><input type="text"name='name' class="form-control" placeholder="Name"></div>

                  <div class="textfield-phone one-third"><input type="text" name='phone_number' class="form-control" placeholder="Phone"></div>

                  <div class="book-date one-third"><input type="text" id="book_date" name='when' class="form-control" placeholder="M/D/YYYY"></div>

                  <div class="book-time one-third">
                    <input type="text" name='at'id="book_time" class="form-control" placeholder="Time">
                  </div>

                  <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="person" id="" class="form-control">
                      <option value="">Person</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4+">4+</option>
                    </select>

                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Book a table">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
