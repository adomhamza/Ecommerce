

<!--<label for="name">Name</label>
<input type="text" id="name" name="name" /><br />

<label for="age">Age</label>
<input type="number" id="age" name="age" min="18" max="30" /><br />



<label for="region">Region</label>
<input type="text" id="region" name="region"></input><br />

<label for="phone">Phone</label>
<input type="tel" id="phone" name="phone_number" placeholder="123-456-7890" size="9" maxlength="9" minlength="9">
-->
<!-- pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" -->

<!--</input><br />

<input type="submit" name="submit" value="Send Details" />

</form>-->
<div class="container">
    <div class="field">
        <label for="name" class="label">Name</label>
        <div class="control has-icons-left">
            <input class="input is-rounded" type="text" required id="name" name="name" placeholder="Full Name">
            <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
            </span>
        </div>

    </div>

    <div class="field">
        <label class="label">Price</label>
        <div class="control  has-icons-left has-icons-right">
            <input class="input is-rounded is-success" type="number" required placeholder="18-30" id="price" name="price" min="18" max="30">
            <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
            </span>
            <!--  <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
            </span> -->
        </div>
        <p class="help is-success"></p>
    </div>




    <div class="field">
        <label class="label">Quantity</label>
        <div class="control has-icons-left">
            <span class="select is-rounded">
                <select id="region" required name="quantity">
                    <option selected req disabled required hidden>Select Region</option>
                    <option>Ahafo Region</option>
                    <option>Ashanti Region</option>
                    <option>Bono-East Region</option>
                    <option>Brong Ahafo Region</option>
                    <option>Central Region</option>
                    <option>Eastern Region</option>
                    <option>Greater Accra Region</option>
                    <option>Northern Region</option>
                    <option>North East Region</option>
                    <option>Oti Region</option>
                    <option>Savannah Region</option>
                    <option>Upper East Region</option>
                    <option>Upper West Region</option>
                    <option>Volta Region</option>
                    <option>Western Region</option>
                    <option>Western-North Region</option>
                </select>
            </span>
            <span class="icon is-small is-left">
                <i class="fas fa-globe"></i>
            </span>
        </div>
    </div>

    <!--  <div class="field has-addon">
        <label class="label">Phone</label>
        <p class="control">
            <input class="input" type="tel" id="phone" name="phone_number" placeholder="123-456-7890" 
            size="9" maxlength="9" minlength="9">
        </p>
        <p class="control">
            <a class="button is-static">
                +233
            </a>
        </p>
    </div> -->
    <label class="label">Description</label>
    <div class="field has-addons">



        <div class="control has-icons-left">
            <a class="button is-static">
                +233
            </a>
        </div>
        <p class="control is-expanded">
            <input class="input is-rounded" type="tel" id="description" required name="description" size="9" maxlength="9" minlength="9" placeholder="Your phone number without the first zero">
        </p>
    </div>
    <p class="help"><strong>Do not enter the first zero</strong></p><br>



    <!-- <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left">
            <input class="input is-rounded is-danger required
            is-hovered" type="email" placeholder="Email input">
            <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
            </span>

        </div>

    </div> -->
    <div id="file-js-example" class="file has-name">
        <label class="file-label">
            <input class="file-input" type="file" id="avatar" name="avatar">
            <span class="file-cta">
                <span class="file-icon">
                    <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                    Choose a file…
                </span>
            </span>
            <span class="file-name">
                No file uploaded
            </span>
        </label>
    </div>

    <script>
        const fileInput = document.querySelector('#file-js-example input[type=file]');
        fileInput.onchange = () => {
            if (fileInput.files.length > 0) {
                const fileName = document.querySelector('#file-js-example .file-name');
                fileName.textContent = fileInput.files[0].name;
            }
        }
    </script>



    <div class="field">
        <div class="control">
            <label class="checkbox">
                <input type="checkbox" required>
                I agree to the be contacted by <em>Face of Hijab</em><!-- <a href="#">terms and conditions</a> -->
            </label>
        </div>
    </div>

    <!-- <div class="field">
        <div class="control">
            <label class="radio">
                <input type="radio" name="question">
                Yes
            </label>
            <label class="radio">
                <input type="radio" name="question">
                No
            </label>
        </div>
    </div> -->

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Submit</button>
        </div>
        <div class="control">
            <button class="button is-link is-light" type="reset">Cancel</button>
        </div>
    </div>


</div>