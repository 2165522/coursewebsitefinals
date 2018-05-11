$(function () {
    $('.fixed-action-btn').floatingActionButton();

    $('#js').on('click', function () {
        $('#content').load('contents/contentJS.php');
    });
    $('#php').on('click', function () {
        $('#content').load('contents/contentPHP.php');
    });
    $('#node').on('click', function () {
        $('#content').load('contents/contentNode.php');
    });
});