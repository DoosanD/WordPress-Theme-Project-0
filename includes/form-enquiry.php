<form id="enquiry">
    <h2>Send an enquiry about <?php the_title(); ?></h2>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="">First Name</label>
            <input type="text" name="fname" placeholder="First Name" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="">Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Email Address" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="">Phone</label>
            <input type="tel" name="phone" placeholder="Phone" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <textarea name="enquiry" class="form-control" placeholder="Your Enquiry" required></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Send your Enquiry</button>
    </div>
</form>

<script>
    (function($) {
        $('#enquiry').submit(function(event) {

            event.preventDefault();

            var endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';

            var form = $('#enquiry').serialize();

            var formdata = new FormData;

            formdata.append('action', 'enquiry');
            formdata.append('enquiry', form);

            $.ajax(endpoint, {
                type: 'POST',
                data: formdata,
                processData: false,
                contentType: false,

                success: function(res) {
                    // $('enquiry').fadeOut(100);
                    return '<p>Thanks</p>'
                },
                error: function(res) {
                    alert(res.data);
                }

            })

        })
    })(jQuery)
</script>