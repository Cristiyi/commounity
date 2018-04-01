define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'resourse/index',
                    add_url: 'resourse/add',
                    edit_url: 'resourse/edit',
                    del_url: 'resourse/del',
                    multi_url: 'resourse/multi',
                    table: 'resourse',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'weigh',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'category_id', title: __('Category_id')},
                        {field: 'title', title: __('Title')},
                        {field: 'baidu_url', title: __('Baidu_url'), formatter: Table.api.formatter.url},
                        {field: 'password', title: __('Password')},
                        {field: 'image', title: __('Image'), formatter: Table.api.formatter.image},
                        {field: 'images', title: __('Images'), formatter: Table.api.formatter.images},
                        {field: 'views', title: __('Views')},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'weigh', title: __('Weigh')},
                        {field: 'status', title: __('Status'), visible:false, searchList: {"normal":__('normal'),"hidden":__('hidden')}},
                        {field: 'status_text', title: __('Status'), operate:false},
                        {field: 'state', title: __('State'), visible:false, searchList: {"0":__('State 0'),"1":__('State 1'),"2":__('State 2')}},
                        {field: 'state_text', title: __('State'), operate:false},
                        {field: 'description', title: __('Description')},
                        {field: 'attachfile', title: __('Attachfile')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});