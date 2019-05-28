<div class="container">
    <div class="row">
        <h2 class="text-center">
            Realtime Data Table
        </h2>
        <div class="col-md-7" style="font-size: 19px; text-align: center;">
            <div class="form-group" style="text-align: center;">
                <button class="btn btn-danger btn-lg" id="remove">
                    <i class="glyphicon glyphicon-remove"></i>
                </button>
            </div>
            <table id="hardTable" class="display" width="100%">

            </table>
        </div>
        <form id="add" class="col-md-4 col-md-offset-1" onclick="">
            <h2 class="text-center">Create New User</h2>
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" required name="firstname" id="firstname" placeholder="Fist Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" required name="lastName" id="lastName" placeholder="Last Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" required name="password" id="password" placeholder="qwerty12345" class="form-control">
            </div>
            <div class="form-group">
                <label for="about">About yourself</label>
                <textarea type="about" required name="about" id="about" placeholder="Tell me something about you." class="form-control txtArea">
                    </textarea>
            </div>

            <div class="form-group">
                <input type="submit" required class="btn btn-lg btn-block" style="background-color: coral;"value="Add">
            </div>
        </form>
    </div>
</div>
