<!-- Buses -->
<div class="text-center d-flex align-items-center justify-content-center">
    <span style='font-size:36px' class="text-xl-center">車輛管理</span>
<button class="add-bus btn btn-info m-2">新增車輛</button>
</div>
<script>
$(".add-bus").on("click",function(){
    const $btn = $(this);
    $.get("modals/add_bus.php",(modal)=>{
        $("#Modal").html(modal)
        $("#BusModal").modal("show")
        $("#BusModal").on("hide.bs.modal", function(){
            $btn.focus();
        })
    })
})
</script>