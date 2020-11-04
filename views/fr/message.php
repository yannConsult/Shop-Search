<?php
/**
 * Created by PhpStorm.
 * User: SMART2
 * Date: 22/07/2020
 * Time: 11:47
 */

if (isset($_SESSION['success'])) {
    $message = $_SESSION['success'];
    echo '
<div aria-live="polite" class="toast-d" aria-atomic="true">
    <div class="toast bg-success  text-white">
        <div class="toast-header bg-success text-white">
            <i class="fas fa-check fa-lg mr-2"></i>
            <strong class="mr-auto text-capitalize">SUCCES</strong>
            <button type="button" class="ml-2 my-1 close text-white" data-dismiss="toast"
                    aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="toast-body">
        <p>
' . $message . '
</p>
        </div>
    </div>
</div>

';
    unset($_SESSION['success']);
} else if (isset($_SESSION['fail'])) {
    $message = $_SESSION['fail'];
    echo '
<div aria-live="polite" aria-atomic="true" class="toast-d-error">
    <div class="toast bg-danger text-white" >
        <div class="toast-header bg-danger text-white">
            <i class="fas fa-times fa-lg mr-2"></i>
            <strong class="mr-auto text-capitalize">ECHEC</strong>
            <button type="button" class="ml-2 my-1 close text-white" data-dismiss="toast"
                    aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="toast-body">
        <p>
' . $message . '
</p>
        </div>
    </div>
</div>
';
    unset($_SESSION['fail']);
}

?>

<script type = "text/javascript">
    $(document).ready(function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, {delay: 5000}).show();
        });

        toastList.addEventListener('hidden.bs.toast', ()=>{
            $(".toats-container").remove();
        });
    });
</script>