<section>
    <div class="container Contact_rap" id="Contact">
        <h2>
            {{$navs[3]->name}}
            <span class="logo_end">_</span>
        </h2>
        <p class="text_intro">
            {{$descs[0]->contact_desc}}
        </p>

        <form class="form-horizontal contact_form">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-1 ">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="text" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-1 ">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-1 ">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-default">Send email</button>
                </div>
            </div>
        </form>
    </div>
</section>