<form action="<?php echo e(route('add.announcement')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label >Subject</label>
            <input class="form-control" type="text" placeholder="Announcement subject" name="subject">
        </div>

        <div class="form-group">
        <label >Message</label>
            <textarea  class="form-control" name="message" placeholder="Message..."></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Announce!" class="custom-btn">
        </div>

        <label class="send-notification"><input type="checkbox" name="notification"  value="true" checked> Send Push Notification</label>
    </form>