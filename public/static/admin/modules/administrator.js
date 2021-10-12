layui.use(['table', 'form'], function (e) {
    var $ = layui.$,
        table = layui.table;

    table.render({
        elem: "#admin-data-table"
        ,url: "/admin/administrators/data-list"
        ,page: true
        , cols:[[
            {type: "checkbox",fixed: "left"}
            ,{field:'id', title:'ID', width: 100, fixed:'left'}
            ,{field:'name', title:'昵称', width: 100}
        ]]
    })

    e('administrator', {})
})
