var TreeView = function () {

    return {
        //main function to initiate the module
        init: function () {

            var DataSourceTree = function (options) {
                this._data  = options.data;
                this._delay = options.delay;
            };

            DataSourceTree.prototype = {

                data: function (options, callback) {
                    var self = this;

                    setTimeout(function () {
                        var data = $.extend(true, [], self._data);

                        callback({ data: data });

                    }, this._delay)
                }
            };

            // INITIALIZING TREE
            var treeDataSource = new DataSourceTree({
                data: [
                    <?php
                        for ($i=0; $i<$num; $i++)
                        {
                            echo "{ name: 'Dashboard', type: 'folder', additionalParameters: { id: 'F1' } },";
                        }
                    ?>
                    { name: 'Dashboard', type: 'folder', dataAttributes: { id: 'F1' } },
                    { name: 'Elements', type: 'folder', dataAttributes: { id: 'F2' } },
                    { name: 'View Category', type: 'item', dataAttributes: { id: 'I1' } },
                    { name: 'Testing', type: 'item', dataAttributes: { id: 'I2' } }
                ],
                delay: 400
            });

            $('#FlatTree').tree({
                dataSource: treeDataSource,
                loadingHTML: '<img src="/public/images/input-spinner.gif"/>',
            });

        }

    };

}();