<!-- stations -->
<div class="text-center d-flex align-items-center justify-content-center">
    <span style='font-size:36px' class="text-xl-center">站點管理</span>
<button class="add-station btn btn-info m-2">新增站點</button>
</div>
<script>
$(".add-station").on("click",function(){
    const $btn = $(this);
    $.get("modals/add_station.php",(modal)=>{
        $("#Modal").html(modal)
        $("#StationModal").modal("show")
        $("#StationModal").on("hide.bs.modal", function(){
            $btn.focus();
        })
    })
})
</script>