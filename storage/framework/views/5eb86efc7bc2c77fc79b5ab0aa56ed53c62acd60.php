<form action="<?php echo e(route('add.stream')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="url" class="theme-color">Stream URL</label>
            <p class="help-block">Copy and paste the Youtube live Content id</p>
            <input class="form-control" type="text" placeholder="stream URL id" name="url">
        </div>
        <div class="form-group">
            <label for="url" class="theme-color">Title</label>
            <input class="form-control" type="text" placeholder="stream title" name="title">
        </div>
        <div class="form-group">
        <label for="description" class="theme-color">Description</label>
            <textarea  class="form-control" name="description" placeholder="what is this stream about?"></textarea>
        </div>

		<label class="send-notification"><input type="checkbox" name="notification" value="true" checked>  Send Push Notification</label>
        
        <div class="form-group">
            <input type="submit" value="GO LIVE HERE!" class="custom-btn">
        </div>
    </form>