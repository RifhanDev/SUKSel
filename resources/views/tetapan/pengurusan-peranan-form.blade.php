
<strong class="mb-2">Senarai Menu</strong>
<div id="tree"></div>


<script>

$(function() {
    $('#tree').jstree({
        'core': {
            'data': {
                'url': '{{ route("menu.tree-data") }}',
                'dataType': 'json'
            }
        },
        'plugins': ['checkbox']
    });
});

	
</script>
