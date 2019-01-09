@include('layouts.dashboard_header')

    <section class="dashboard dashboard--empty">

      @include('layouts.dashboard_sidebar')

      <div class="dashboard__body">

        @include('layouts.control')

        @include('_messages')

        <section class="project">

          <form action="/create-user-project-loggedin" method="post">

            {{ csrf_field() }}

            <div id="div-1">

              <div class="project__name">
                <p class="project-margin project-font">Project Title</p>
                <input type="text" name="title" id="title" class="project__input">
              </div>
              <div class="project__name">
                <p class="project-margin project-font">Project Description</p>
                <p class="project-font-cap">Each project should be a stand alone project. Example - <span class="project-font-cap--red">Do:
                  </span>Fans. <span class="project-margin-left   project-font-cap--green">Don’t: </span>Fans, Television, Chairs.</p>
                <textarea rows="3" cols="80" name="description" class="project__input" id="description"></textarea>
              </div>
              <div class="project__name">
                <p class="project-margin project-font">Cost of the Project</p>
                <input type="text" name="project_cost" id="project_cost" class="project__input">
              </div>
              <div class="project__name">
                <p class="project-margin project-font">Beneficiary School</p>
                <input type="text" name="beneficiary_school" id="beneficiary_school" class="project__input">
              </div>
              <div class="project__name">
                <p class="project-margin project-font">Address</p>
                <input type="text" name="address" id="address" class="project__input">
              </div>
              <div class="project__dropdowns">
                <div class="project__dropdowns--drop">
                  <label class="project-margin-drop project-font">State</label>
                  <select class="project__dropdowns--select" name="state" id="state" data-placeholder="Pick your choice"
                    data-tabindex="1">
                    <option selected>Select a State</option>
                  </select>
                </div>
                <div class="project__dropdowns--drop">
                  <label class="project-margin-drop project-font">LGA</label>
                  <select class="project__dropdowns--select" name="lga" id="lga" data-placeholder="Pick your choice"
                    data-tabindex="1">
                    <option selected>Select a LGA</option>
                  </select>
                </div>
              </div>
              <div class="project__category">
                <p class="project-margin project-font">Category of Project</p>
                <div class="project__category__buttons">
                  <button type="button" class="btn btn__category" onclick="showPersonalForm()">Personal</button>
                  <button type="button" class="btn btn__category" onclick="showGroupForm()">Group</button>
                  <button type="button" class="btn btn__category" onclick="showPubicForm()">Public</button>
                </div>
              </div>
            </div>
            <div id="div-2">
              <p class="project-margin-top type-font">If you are here, you agree to solely fund this project. If not, <button class="btn btn__back"
                  type="button" onclick="showProjectForm()"><i class="fas fa-arrow-left"></i> Go Back</button></p>
              <div class="project__cost">
                <input type="checkbox" name="personal_cost_me" id="personal_cost_me" value="personal_cost_me">
                <label for="personal_cost_me"><p class="type-font"> Do you want us to cost you?</p></label>
              </div>
              <div class="project__amount">
                <p class="type-font">If No, tell us how much you want to give</p>
                <input type="text" name="personal_amount_to_donate" id="personal_amount_to_donate" class="project__input project__input--2">
              </div>
              <button type="submit" class="btn btn__create">Create Project</button>
            </div>

            <div id="div-3">
              <p class="project-margin-top type-font">If you are here, the group agrees to collectively fund this project. If not,
                <button type="button" class="btn btn__back" onclick="showProjectForm()"><i class="fas fa-arrow-left"></i> Go Back</button></p>
              <div class="project__cost">
                <input type="checkbox" name="group_cost_me" id="group_cost_me" value="group_cost_me">
                <label for="group_cost_me"><p class="type-font"> Do you want us to cost you?</p></label>
              </div>
              <div class="project__amount">
                <p class="type-font">If No, tell us how much you want to give</p>
                <input type="text" name="group_amount_to_donate" id="group_amount_to_donate" class="project__input project__input--2">
              </div>
              <button type="submit" class="btn btn__create">Create Project</button>
            </div>

            <div id="div-4">
              <p class="project-margin-top type-font">If you are here, you agree that Schoolalumni should allow funding of this project
                by the public. If not, <button type="button" class="btn btn__back" onclick="showProjectForm()"><i class="fas fa-arrow-left"></i>
                  Go Back</button></p>
              <div class="project__cost">
                <input type="checkbox" name="public_cost_me" id="public_cost_me" value="public_cost_me">
                <label for="public_cost_me"><p class="type-font"> Do you want us to cost you?</p></label>
              </div>
              <div class="project__amount">
                <p class="type-font">If No, tell us how much you want to give</p>
                <input type="text" name="public_amount_to_donate" id="public_amount_to_donate" class="project__input project__input--2">
              </div>
              <button type="submit" class="btn btn__create">Create Project</button>
            </div>

          </form>

        </section>


      </div>
    </section>

@include('layouts.dashboard_footer')
