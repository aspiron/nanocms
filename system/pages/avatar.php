<? 

    page_auth();
    head('Загрузка фотографии'); 

?>

<div data-role="content" id="container">

        <div id="information" class="ui-content" data-role="popup" data-theme="b"></div>
    
	<div id="filelist">
        </div>
        
        <ul data-role="listview" data-inset="true">
        
            <li data-role="list-divider">Выберите файл для загрузки (jpg, jpeg, gif, png)</li>
        
            <li class="ui-body">
            
                <div class="ui-grid-a">
                    <div class="ui-block-a"><a href="#" data-role="button" id="pickfiles">Выбрать</a></div>	   
                    <div class="ui-block-b"><a href="#" data-role="button" id="clean">Очистить</a></div>
                </div>
                <div class="ui-grid-solo">
                    <div class="ui-block-a"><a href="#" data-role="button" id="uploadfiles" data-theme="b">Загрузить</a></div>
                </div>
            </li>
        
        </ul>
        
</div>

<script src="/static/js/plupload.js"></script>
<script src="/static/js/custom/avatar.js"></script>

<? 
    footer();
?>