<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Insert an Student</h5>
                        <form action="" method="POST">
                            <div class="form-floating mb-3">
                                <!--                                 <input type="email" name="login" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div> -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="nom_complet" class="form-control" id="floatingInput" placeholder="Nom Complet">
                                    <label for="floatingInput">Nom Complet</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="matricule" class="form-control" id="floatingInput" placeholder="Matricule">
                                    <label for="floatingInput">Matricule</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="adresse" class="form-control" id="floatingInput" placeholder="Adresse">
                                    <label for="floatingInput">Adresse</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <label class="control-label">Sexe</label>
                                    <div class="selectContainer">
                                        <div class="input-group">
                                            <select name="sexe" class="form-control selectpicker">
                                                <option value=" ">Please select your sexe</option>
                                                <option>M</option>
                                                <option>F</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Save
                                    </button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>