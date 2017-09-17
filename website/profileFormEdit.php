                    
                    
                    <form action="profile.php" method="post">
                    <div class="formEdit" id="formEdit">
                            <div class="form-group">
                              <label for="InputEmail1">Email address</label>
                              <input type="email" class="form-control" id="InputEmail1" name="email" aria-describedby="emailHelp" value="<?= $_SESSION['email']?>" required>
                            </div>
                            <div class="form-group">
                              <label for="InputPassword">Password</label>
                              <input type="password" class="form-control" id="InputPassword" name="password" value="<?- $_SESSION['password']?>" pattern = "(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                              <small id="passwordHelp" class="form-text text-muted">Password must contain at least 8 Characters (UpperCase, LowerCase, Number/SpecialCharacter).</small>
                            </div>
                            <div class="form-group">
                              <label for="InputPassword1">Confirm Password</label>
                              <input type="password" class="form-control" id="InputPassword1" name="confirmpassword" value="<?= $_SESSION['password']?>" required>
                          </div>
                          
                          <div class="form-group">
                         <label for="pref1">Preferences</label>
                              <select class="form-control" id="pref1" name="pref1" required>
                                <option <?php if($_SESSION['pref1']=="Theatre") { echo 'selected="selected"'; } else { echo ''; }?>>Theatre</option>
                                <option <?php if($_SESSION['pref1']=="Musicals") { echo 'selected="selected"'; } else { echo ''; }?>>Musicals</option>
                                <option <?php if($_SESSION['pref1']=="Concerts") { echo 'selected="selected"'; } else { echo ''; }?>>Concerts</option>
                                <option <?php if($_SESSION['pref1']=="Comedy") { echo 'selected="selected"'; } else { echo ''; }?>>Comedy</option>
                                <option <?php if($_SESSION['pref1']=="Sports") { echo 'selected="selected"'; } else { echo ''; }?>>Sports</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <select class="form-control" id="pref2" name="pref2">
                                <option <?php if($_SESSION['pref2']=="None") { echo 'selected="selected"'; } else { echo ''; }?>>None</option>        
                                <option <?php if($_SESSION['pref2']=="Theatre") { echo 'selected="selected"'; } else { echo ''; }?>>Theatre</option>
                                <option <?php if($_SESSION['pref2']=="Musicals") { echo 'selected="selected"'; } else { echo ''; }?>>Musicals</option>
                                <option <?php if($_SESSION['pref2']=="Concerts") { echo 'selected="selected"'; } else { echo ''; }?>>Concerts</option>
                                <option <?php if($_SESSION['pref2']=="Comedy") { echo 'selected="selected"'; } else { echo ''; }?>>Comedy</option>
                                <option <?php if($_SESSION['pref2']=="Sports") { echo 'selected="selected"'; } else { echo ''; }?>>Sports</option>
                              </select>
                              </div>
                              
                              <div class="form-group">
                              
                              <select class="form-control" id="pref3" name="pref3">
                                <option <?php if($_SESSION['pref3']=="None") { echo 'selected="selected"'; } else { echo ''; }?>>None</option>        
                                <option <?php if($_SESSION['pref3']=="Theatre") { echo 'selected="selected"'; } else { echo ''; }?>>Theatre</option>
                                <option <?php if($_SESSION['pref3']=="Musicals") { echo 'selected="selected"'; } else { echo ''; }?>>Musicals</option>
                                <option <?php if($_SESSION['pref3']=="Concerts") { echo 'selected="selected"'; } else { echo ''; }?>>Concerts</option>
                                <option <?php if($_SESSION['pref3']=="Comedy") { echo 'selected="selected"'; } else { echo ''; }?>>Comedy</option>
                                <option <?php if($_SESSION['pref3']=="Sports") { echo 'selected="selected"'; } else { echo ''; }?>>Sports</option>
                              </select>
                              </div>
                        </div>
                        <button type="submit" class="btn btn-primary saveButton" id="saveButton">Save</button>
                        </form>