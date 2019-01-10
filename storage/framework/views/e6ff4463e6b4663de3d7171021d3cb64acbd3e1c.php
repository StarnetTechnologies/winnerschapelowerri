<?php $__env->startSection('styles'); ?>
<style>
    /* .card{
        border: 1px solid rgba(200,0,0,.5)
    }
	.card-header{
        background: linear-gradient(to bottom right,rgba(200,0,0,1),rgba(0,0,0,1));
        color: #fff;
    } */

    .card{
        box-shadow: 0px 10px 10px rgba(0,0,0,.2);
    }
    .card:hover{
        box-shadow: 0px 10px 10px rgba(100,0,0,.5);
    }

    .card-title{
        color: red;
        font-weight: bolder;
    }
    .card:hover .card-title{
        color: #fff;
    }
    .card:hover .card-header{
        background: linear-gradient(to bottom right,rgba(200,0,0,1),rgba(0,0,0,1));
        color: #fff;
    } 
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('top-widget'); ?>
    <?php echo $__env->make('widgets.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="eclipse-bg">
    <section id="mandate" style="padding: 20px 0">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php echo $__env->make('widgets.mandate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </section>

	<div style="padding: 20px 0">
		<h3 class="text-center super-font theme-color">Pillars of Faith</h3>
	</div>
	<div class="row">
		<div class="col-md-10 offset-md-1">
            <div class="card-columns">
                
            <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Faith</h4>
                        <div class="text-right">
                            <small class="text-right">1 John 5:4; Eph. 6:16</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p>For whatsoever is born of God overcometh the world: and this is the victory that overcometh the world, even our faith.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                                1 John 5:4
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">The Word</h4>
                        <div class="text-right">
                            <small class="text-right">John 1:1-12; Heb. 1:3</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p> Who being the brightness of his glory, and the express image of his person, and upholding all things by the word of his power, when he had by himself purged our sins, sat down on the right hand of the Majesty on high.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                                Heb. 1:3
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">The Supernatural</h4>
                        <div class="text-right">
                            <small class="text-right">Ps. 82:5-7; John 3:8</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p> The wind bloweth where it listeth, and thou hearest the sound thereof, but canst not tell whence it cometh, and whither it goeth: so is every one that is born of the Spirit.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                            John 3:8
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">The Holy Spirit</h4>
                        <div class="text-right">
                            <small class="text-right">Acts 1:1-8; Isaiah 10:27</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p> And it shall come to pass in that day, that his burden shall be taken away from off thy shoulder, and his yoke from off thy neck, and the yoke shall be destroyed because of the anointing.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                            Isaiah 10:27
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Prosperity</h4>
                        <div class="text-right">
                            <small class="text-right">3 John 2; Ps. 35:27; Zech. 1:17</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p> Beloved, I wish above all things that thou mayest prosper and be in health, even as thy soul prospereth.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                            3 John 2
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Prayer</h4>
                        <div class="text-right">
                            <small class="text-right">1 John 5:14</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p>And this is the confidence that we have in him, that, if we ask anything according to his will, he heareth us. </p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                            1 John 5:14
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Healing</h4>
                        <div class="text-right">
                            <small class="text-right">Isaiah 53:3-4; Jer. 8:22; Matt. 8:17</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p>That it might be fulfilled which was spoken by Esaias the prophet, saying, Himself took our infirmities, and bare our sicknesses. </p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                            Matt. 8:17
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Wisdom</h4>
                        <div class="text-right">
                            <small class="text-right">Prov. 24:3-4, Isaiah 33:6</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p> And wisdom and knowledge shall be the stability of thy times, and strength of salvation: the fear of the Lord is his treasure.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                            Isaiah 33:6
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Success</h4>
                        <div class="text-right">
                            <small class="text-right">Joshua 1:8-10</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p> This book of the law shall not depart out of thy mouth; but thou shalt meditate therein day and night, that thou mayest observe to do according to all that is written therein: for then thou shalt make thy way prosperous, and then thou shalt have good success.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                            Joshua 1:8
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Vision</h4>
                        <div class="text-right">
                            <small class="text-right">Prov. 29:18, Jer. 29:11</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p> Where there is no vision, the people perish: but he that keepeth the law, happy is he.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                                Prov. 29:18
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Consecration</h4>
                        <div class="text-right">
                            <small class="text-right">Hebrews 12:14; 2Tim. 2:19</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p> Nevertheless the foundation of God standeth sure, having this seal, the Lord knoweth them that are his.  And let every one that nameth the name of Christ depart from iniquity.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                            2 Tim. 2:19
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Praise</h4>
                        <div class="text-right">
                            <small class="text-right">2 Chro. 20:20-22;  Ps. 67:1-7; 149:1-9</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 card-body">
                        <p> And when they began to sing and to praise, the Lord set ambushments against the children of Ammon, Moab, and mount Seir, which were come against Judah: and they were smitten.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                            2 Chro. 20:22
                            </small>
                        </footer>
                        </blockquote>
                    </div>
                </div>


            </div>
		</div>
	</div>
</div>

        <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>