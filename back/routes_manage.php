<!-- routes -->
<div class="text-center d-flex align-items-center justify-content-center">
    <span style='font-size:36px' class="text-xl-center">路線管理</span>
<button class="add-route btn btn-info m-2">新增路線</button>
</div>
<script>
    $(".add-route").on("click",function(){
        $.get("./modals/add-route.php",(modal)=>{
            $("#Modal").html(modal)
            $("Route")
        })
    })
</script>