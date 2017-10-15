                    <div class="noEditForm" id="noEditForm">
                        <div class="form-group">
                             <label for="InputUsername">Username</label></br>
                                 <text id="InputUsername" name="username"><?= $_SESSION['username']?></text>
                        </div>
                        <div class="form-group">
                             <label for="InputEmail1">Email</label></br>
                                 <text id="InputEmail1" name="email"><?= $_SESSION['email']?></text>
                        </div>
                        <div class="form-group">
                             <label for="InputUsername">Password</label></br>
                                 <button id="passwordHidden" name="password" class="passHidden btn btn-default">Hold to show</button>
                                 <text id="passwordShow" name="password" class="passShow"><?= $_SESSION['password']?></text>
                        </div>
                        
                        <div>
                            <label for="pref1">Preference 1</label></br>
                            <text id="pref1" name="pref1"><?= $_SESSION['pref1']?></text>
                        </div>
                        <div>
                            <label for="pref1">Preference 2</label></br>
                            <text id="pref2" name="pref2"><?= $_SESSION['pref2']?></text>
                        </div>
                        <div>
                            <label for="pref3">Preference 3</label></br>
                            <text id="pref3" name="pref3"><?= $_SESSION['pref3']?></text>
                        </div></br>
                          <button class="btn btn-primary editButton" id="editButton">Edit</button>
                        </div>