<?php if(auth()->guard()->guest()): ?>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/post')); ?>"><?php echo e(__('TuitionPost')); ?></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
    </li>
     
    <?php if(Route::has('register')): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
        </li>
    <?php endif; ?>
<?php else: ?>

     <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/post')); ?>"><?php echo e(__('TuitionPost')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/createPost')); ?>"><?php echo e(__('CreatePost')); ?></a>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a>
    </li>
    </li>

    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
        </a>

        
 
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" style="color:black" href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>
            <a class="dropdown-item"  href="/profile/<?php echo e(Auth::user()->id); ?>"
            >
                <?php echo e(__(Auth::user()->name)); ?>

            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
        </div>
    </li>
   
<?php endif; ?><?php /**PATH F:\NHC_D\xamp\htdocs\Tuitionee\resources\views/layouts/navlink.blade.php ENDPATH**/ ?>