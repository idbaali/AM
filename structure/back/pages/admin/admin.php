<section class="p-home">
  <!-- TABS POUR ADMIN -->
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="actualites-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Actualites</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="actions-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Nos Actions</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="benevole-tab" data-bs-toggle="tab" data-bs-target="#benevole" type="button" role="tab" aria-controls="contact" aria-selected="false">Devenir Benevole</button>
    </li>

  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      Ici sera l'accueil admin-header
      <section class="p-login">
        <div class="row">
          <div class="col-md-2 col-sm-2 col-lg-2"></div>
          <div class="col-md-8 col-sm-8 col-lg-8">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="col-md-2 col-sm-2 col-lg-2"></div>
        </div>
      </section>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="actualites-tab">
      Ici sera formulaire actualites.
      <section class="p-login">
        <div class="row">
          <div class="col-md-2 col-sm-2 col-lg-2"></div>
          <div class="col-md-8 col-sm-8 col-lg-8">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titre de l'actualité</label>
                <input type="text" class="form-control" id="exampleInputTitle" name="title">
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                  <div class="mb-3">
                    <label for="actualiteImage" class="form-label">Image de l'actualité</label>
                    <input type="file" class="form-control" id="actualiteImage" name="actualiteImage">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                  <div class="mb-3">
                    <label for="actualiteDate" class="form-label">Date de l'actualité</label>
                    <input type="datetime-local" class="form-control" id="actualiteDate" name="actualiteDate">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description de l'actualité</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
              </div>
              <div class="mb-3">
                <label for="country" class="form-label">Pays</label>
                <input type="text" class="form-control" id="country" name="country">
              </div>
              <div class="mb-3">
                <label for="city" class="form-label">Ville</label>
                <input type="text" class="form-control" id="city" name="city">
              </div>

              <button type="submit" class="btn btn-primary">Soumettre</button>
            </form>
          </div>
          <div class="col-md-2 col-sm-2 col-lg-2"></div>
        </div>
      </section>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="actions-tab">
      Ici sera formulaire nos actions.
      <section class="p-login">
        <div class="row">
          <div class="col-md-2 col-sm-2 col-lg-2"></div>
          <div class="col-md-8 col-sm-8 col-lg-8"></div>
          <form>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
              <div class="mb-3">
                <label for="actionTitle" class="form-label">Titre de l'action</label>
                <input type="text" class="form-control" id="actionTitle" name="actionTitle">
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
              <div class="mb-3">
                <label for="actionImage" class="form-label">Image de l'action</label>
                <input type="file" class="form-control" id="actionImage" name="actionImage">
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
              <div class="mb-3">
                <label for="actionDate" class="form-label">Date de l'action</label>
                <input type="datetime-local" class="form-control" id="actionDate" name="actionDate">
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
              <div class="mb-3">
                <label for="actionDescription" class="form-label">Description de l'action</label>
                <textarea class="form-control" id="actionDescription" name="actionDescription" rows="4"></textarea>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
              <div class="mb-3">
                <label for="actionCountry" class="form-label">Pays</label>
                <input type="text" class="form-control" id="actionCountry" name="actionCountry">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
          </form>
        </div>
      </section>
    </div>
    <div class="tab-pane fade" id="benevole" role="tabpanel" aria-labelledby="benevole-tab">
      Ici sera formulaire des benevole.
      <section class="p-login">
        <div class="row">
          <div class="col-md-2 col-sm-2 col-lg-2"></div>
          <div class="col-md-8 col-sm-8 col-lg-8">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </section>
    </div>

</section>