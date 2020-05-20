window.search = function () {
    var form = document.getElementById('search-form');
    var val = document.getElementById('search-input').value;
    document.getElementById('hidden-input').value = 'site:blog.9657.info/' + ' ' + val;
    return true;
}
