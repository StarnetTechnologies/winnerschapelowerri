                   <div class="col-md-2 col-sm-3 col-4">
                        <div class="has-options-overlay" style="margin: 5px">
                            <div class="overlay">
                                <div class="options-container">
                                    <span title="edit caption" class="option text-primary"  onclick="javascript: toggle(document.querySelector('#edit-image-<?php echo e($photo->id); ?>'))"><i class="fa fa-pen"></i> edit</span>
                                    <span title="delete image" class="option text-danger"  onclick="javascript: confirmDelete(this,'discard-gallery-<?php echo e($photo->id); ?>-confirmation')"><i class="fa fa-trash"></i> delete</span>
                                </div>
                                <div style="display:none; position: absolute; z-index: 150; padding: 10px; width: 300px; background-color:#eee; box-shadow: 0px 0px 10px rgba(0,0,0,.5); border-radius: 5px" id="edit-image-<?php echo e($photo->id); ?>">
                                    <form action="<?php echo e(route('update.photo',['id' => $photo->id])); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="_method" value="PUT">
                                        <textarea name="caption" class="form-control" placeholder="edit image caption" style="height: 50px"><?php echo e($photo->caption); ?></textarea>
                                        <br>
                                        <button type="submit" class="custom-btn">Update</button>
                                    </form>
                                </div>
                                
                                <div class="confirmation-container" id="discard-gallery-<?php echo e($photo->id); ?>-confirmation">
                                    <p class="text-warning">Are you sure you want to delete this photo</p>
                                    <button class="btn btn-primary confirm-no">No</button>
                                    <button class="btn btn-danger confirm-yes">Yes,  delete</button>
                                    <form action="<?php echo e(route('delete.photo',['id' => $photo->id])); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </div>
                            </div>
                            <img src="<?php echo e($photo->imageUrl()); ?>" alt="<?php echo e($photo->caption !== null ? $photo->caption : 'Winners Chapel Owerri'); ?>" width="100%" >
                        </div>
                    </div>
