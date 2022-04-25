<?php require_once('./include/header.php'); ?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="mailbox-container">

                    <div class="modal fade" id="composeModal" tabindex="-1" aria-labelledby="composeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="composeModalLabel">Compose Message</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <label for="composeEmailTo" class="form-label">Email address</label>
                                        <input type="email" class="form-control m-b-sm" id="composeEmailTo"
                                            aria-describedby="emailHelp">
                                        <label for="composeTitle" class="form-label">Subject</label>
                                        <input type="text" class="form-control m-b-lg" id="composeTitle"
                                            aria-describedby="title">
                                        <div id="compose-editor" style="display: none;"></div>
                                        <div class="note-editor note-frame">
                                            <div class="note-dropzone">
                                                <div class="note-dropzone-message"></div>
                                            </div>
                                            <div class="note-toolbar" role="toolbar">
                                                <div class="note-btn-group note-style">
                                                    <div class="note-btn-group"><button type="button"
                                                            class="note-btn dropdown-toggle" tabindex="-1"
                                                            data-toggle="dropdown" aria-label="Style"><i
                                                                class="note-icon-magic"> <span
                                                                    class="note-icon-caret"></span></i></button>
                                                        <div class="note-dropdown-menu dropdown-style" role="list"
                                                            aria-label="Style"><a class="note-dropdown-item" href="#"
                                                                data-value="p" role="listitem" aria-label="p">
                                                                <p>Normal</p>
                                                            </a><a class="note-dropdown-item" href="#"
                                                                data-value="blockquote" role="listitem"
                                                                aria-label="blockquote">
                                                                <blockquote>Quote</blockquote>
                                                            </a><a class="note-dropdown-item" href="#" data-value="pre"
                                                                role="listitem" aria-label="pre">
                                                                <pre>Code</pre>
                                                            </a><a class="note-dropdown-item" href="#" data-value="h1"
                                                                role="listitem" aria-label="h1">
                                                                <h1>Header 1</h1>
                                                            </a><a class="note-dropdown-item" href="#" data-value="h2"
                                                                role="listitem" aria-label="h2">
                                                                <h2>Header 2</h2>
                                                            </a><a class="note-dropdown-item" href="#" data-value="h3"
                                                                role="listitem" aria-label="h3">
                                                                <h3>Header 3</h3>
                                                            </a><a class="note-dropdown-item" href="#" data-value="h4"
                                                                role="listitem" aria-label="h4">
                                                                <h4>Header 4</h4>
                                                            </a><a class="note-dropdown-item" href="#" data-value="h5"
                                                                role="listitem" aria-label="h5">
                                                                <h5>Header 5</h5>
                                                            </a><a class="note-dropdown-item" href="#" data-value="h6"
                                                                role="listitem" aria-label="h6">
                                                                <h6>Header 6</h6>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="note-btn-group note-font"><button type="button"
                                                        class="note-btn note-btn-bold" tabindex="-1"
                                                        aria-label="Bold (CTRL+B)"><i
                                                            class="note-icon-bold"></i></button><button type="button"
                                                        class="note-btn note-btn-underline" tabindex="-1"
                                                        aria-label="Underline (CTRL+U)"><i
                                                            class="note-icon-underline"></i></button><button
                                                        type="button" class="note-btn" tabindex="-1"
                                                        aria-label="Remove Font Style (CTRL+\)"><i
                                                            class="note-icon-eraser"></i></button></div>
                                                <div class="note-btn-group note-fontname">
                                                    <div class="note-btn-group"><button type="button"
                                                            class="note-btn dropdown-toggle" tabindex="-1"
                                                            data-toggle="dropdown" aria-label="Font Family"><span
                                                                class="note-current-fontname"
                                                                style="font-family: sans-serif;">sans-serif</span> <span
                                                                class="note-icon-caret"></span></button>
                                                        <div class="note-dropdown-menu note-check dropdown-fontname"
                                                            role="list" aria-label="Font Family"><a
                                                                class="note-dropdown-item" href="#" data-value="Arial"
                                                                role="listitem" aria-label="Arial"><i
                                                                    class="note-icon-menu-check"></i> <span
                                                                    style="font-family: 'Arial'">Arial</span></a><a
                                                                class="note-dropdown-item" href="#"
                                                                data-value="Arial Black" role="listitem"
                                                                aria-label="Arial Black"><i
                                                                    class="note-icon-menu-check"></i> <span
                                                                    style="font-family: 'Arial Black'">Arial
                                                                    Black</span></a><a class="note-dropdown-item"
                                                                href="#" data-value="Comic Sans MS" role="listitem"
                                                                aria-label="Comic Sans MS"><i
                                                                    class="note-icon-menu-check"></i> <span
                                                                    style="font-family: 'Comic Sans MS'">Comic Sans
                                                                    MS</span></a><a class="note-dropdown-item" href="#"
                                                                data-value="Courier New" role="listitem"
                                                                aria-label="Courier New"><i
                                                                    class="note-icon-menu-check"></i> <span
                                                                    style="font-family: 'Courier New'">Courier
                                                                    New</span></a><a class="note-dropdown-item" href="#"
                                                                data-value="Helvetica" role="listitem"
                                                                aria-label="Helvetica"><i
                                                                    class="note-icon-menu-check"></i> <span
                                                                    style="font-family: 'Helvetica'">Helvetica</span></a><a
                                                                class="note-dropdown-item" href="#" data-value="Impact"
                                                                role="listitem" aria-label="Impact"><i
                                                                    class="note-icon-menu-check"></i> <span
                                                                    style="font-family: 'Impact'">Impact</span></a><a
                                                                class="note-dropdown-item" href="#" data-value="Tahoma"
                                                                role="listitem" aria-label="Tahoma"><i
                                                                    class="note-icon-menu-check"></i> <span
                                                                    style="font-family: 'Tahoma'">Tahoma</span></a><a
                                                                class="note-dropdown-item" href="#"
                                                                data-value="Times New Roman" role="listitem"
                                                                aria-label="Times New Roman"><i
                                                                    class="note-icon-menu-check"></i> <span
                                                                    style="font-family: 'Times New Roman'">Times New
                                                                    Roman</span></a><a class="note-dropdown-item"
                                                                href="#" data-value="Verdana" role="listitem"
                                                                aria-label="Verdana"><i
                                                                    class="note-icon-menu-check"></i> <span
                                                                    style="font-family: 'Verdana'">Verdana</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-btn-group note-color">
                                                    <div class="note-btn-group note-color note-color-all"><button
                                                            type="button" class="note-btn note-current-color-button"
                                                            tabindex="-1" aria-label="Recent Color"
                                                            data-backcolor="#FFFF00" data-forecolor="#000000"><i
                                                                class="note-icon-font note-recent-color"
                                                                style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i></button><button
                                                            type="button" class="note-btn dropdown-toggle" tabindex="-1"
                                                            data-toggle="dropdown" aria-label="More Color"> <span
                                                                class="note-icon-caret"></span></button>
                                                        <div class="note-dropdown-menu" role="list">
                                                            <div class="note-palette">
                                                                <div class="note-palette-title">Background Color</div>
                                                                <div><button type="button"
                                                                        class="note-color-reset btn btn-light btn-default"
                                                                        data-event="backColor"
                                                                        data-value="transparent">Transparent</button>
                                                                </div>
                                                                <div class="note-holder" data-event="backColor">
                                                                    <!-- back colors -->
                                                                    <div class="note-color-palette">
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#000000"
                                                                                data-event="backColor"
                                                                                data-value="#000000" data-title="Black"
                                                                                aria-label="Black" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#424242"
                                                                                data-event="backColor"
                                                                                data-value="#424242"
                                                                                data-title="Tundora"
                                                                                aria-label="Tundora"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#636363"
                                                                                data-event="backColor"
                                                                                data-value="#636363"
                                                                                data-title="Dove Gray"
                                                                                aria-label="Dove Gray"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#9C9C94"
                                                                                data-event="backColor"
                                                                                data-value="#9C9C94"
                                                                                data-title="Star Dust"
                                                                                aria-label="Star Dust"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#CEC6CE"
                                                                                data-event="backColor"
                                                                                data-value="#CEC6CE"
                                                                                data-title="Pale Slate"
                                                                                aria-label="Pale Slate"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#EFEFEF"
                                                                                data-event="backColor"
                                                                                data-value="#EFEFEF"
                                                                                data-title="Gallery"
                                                                                aria-label="Gallery"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#F7F7F7"
                                                                                data-event="backColor"
                                                                                data-value="#F7F7F7"
                                                                                data-title="Alabaster"
                                                                                aria-label="Alabaster"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="backColor"
                                                                                data-value="#FFFFFF" data-title="White"
                                                                                aria-label="White" data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FF0000"
                                                                                data-event="backColor"
                                                                                data-value="#FF0000" data-title="Red"
                                                                                aria-label="Red" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FF9C00"
                                                                                data-event="backColor"
                                                                                data-value="#FF9C00"
                                                                                data-title="Orange Peel"
                                                                                aria-label="Orange Peel"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFF00"
                                                                                data-event="backColor"
                                                                                data-value="#FFFF00" data-title="Yellow"
                                                                                aria-label="Yellow" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#00FF00"
                                                                                data-event="backColor"
                                                                                data-value="#00FF00" data-title="Green"
                                                                                aria-label="Green" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#00FFFF"
                                                                                data-event="backColor"
                                                                                data-value="#00FFFF" data-title="Cyan"
                                                                                aria-label="Cyan" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#0000FF"
                                                                                data-event="backColor"
                                                                                data-value="#0000FF" data-title="Blue"
                                                                                aria-label="Blue" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#9C00FF"
                                                                                data-event="backColor"
                                                                                data-value="#9C00FF"
                                                                                data-title="Electric Violet"
                                                                                aria-label="Electric Violet"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FF00FF"
                                                                                data-event="backColor"
                                                                                data-value="#FF00FF"
                                                                                data-title="Magenta"
                                                                                aria-label="Magenta"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#F7C6CE"
                                                                                data-event="backColor"
                                                                                data-value="#F7C6CE" data-title="Azalea"
                                                                                aria-label="Azalea" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFE7CE"
                                                                                data-event="backColor"
                                                                                data-value="#FFE7CE" data-title="Karry"
                                                                                aria-label="Karry" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFEFC6"
                                                                                data-event="backColor"
                                                                                data-value="#FFEFC6"
                                                                                data-title="Egg White"
                                                                                aria-label="Egg White"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#D6EFD6"
                                                                                data-event="backColor"
                                                                                data-value="#D6EFD6" data-title="Zanah"
                                                                                aria-label="Zanah" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#CEDEE7"
                                                                                data-event="backColor"
                                                                                data-value="#CEDEE7"
                                                                                data-title="Botticelli"
                                                                                aria-label="Botticelli"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#CEE7F7"
                                                                                data-event="backColor"
                                                                                data-value="#CEE7F7"
                                                                                data-title="Tropical Blue"
                                                                                aria-label="Tropical Blue"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#D6D6E7"
                                                                                data-event="backColor"
                                                                                data-value="#D6D6E7"
                                                                                data-title="Mischka"
                                                                                aria-label="Mischka"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#E7D6DE"
                                                                                data-event="backColor"
                                                                                data-value="#E7D6DE"
                                                                                data-title="Twilight"
                                                                                aria-label="Twilight"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#E79C9C"
                                                                                data-event="backColor"
                                                                                data-value="#E79C9C"
                                                                                data-title="Tonys Pink"
                                                                                aria-label="Tonys Pink"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFC69C"
                                                                                data-event="backColor"
                                                                                data-value="#FFC69C"
                                                                                data-title="Peach Orange"
                                                                                aria-label="Peach Orange"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFE79C"
                                                                                data-event="backColor"
                                                                                data-value="#FFE79C"
                                                                                data-title="Cream Brulee"
                                                                                aria-label="Cream Brulee"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#B5D6A5"
                                                                                data-event="backColor"
                                                                                data-value="#B5D6A5" data-title="Sprout"
                                                                                aria-label="Sprout" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#A5C6CE"
                                                                                data-event="backColor"
                                                                                data-value="#A5C6CE" data-title="Casper"
                                                                                aria-label="Casper" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#9CC6EF"
                                                                                data-event="backColor"
                                                                                data-value="#9CC6EF" data-title="Perano"
                                                                                aria-label="Perano" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#B5A5D6"
                                                                                data-event="backColor"
                                                                                data-value="#B5A5D6"
                                                                                data-title="Cold Purple"
                                                                                aria-label="Cold Purple"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#D6A5BD"
                                                                                data-event="backColor"
                                                                                data-value="#D6A5BD"
                                                                                data-title="Careys Pink"
                                                                                aria-label="Careys Pink"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#E76363"
                                                                                data-event="backColor"
                                                                                data-value="#E76363" data-title="Mandy"
                                                                                aria-label="Mandy" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#F7AD6B"
                                                                                data-event="backColor"
                                                                                data-value="#F7AD6B" data-title="Rajah"
                                                                                aria-label="Rajah" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFD663"
                                                                                data-event="backColor"
                                                                                data-value="#FFD663"
                                                                                data-title="Dandelion"
                                                                                aria-label="Dandelion"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#94BD7B"
                                                                                data-event="backColor"
                                                                                data-value="#94BD7B"
                                                                                data-title="Olivine"
                                                                                aria-label="Olivine"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#73A5AD"
                                                                                data-event="backColor"
                                                                                data-value="#73A5AD"
                                                                                data-title="Gulf Stream"
                                                                                aria-label="Gulf Stream"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#6BADDE"
                                                                                data-event="backColor"
                                                                                data-value="#6BADDE" data-title="Viking"
                                                                                aria-label="Viking" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#8C7BC6"
                                                                                data-event="backColor"
                                                                                data-value="#8C7BC6"
                                                                                data-title="Blue Marguerite"
                                                                                aria-label="Blue Marguerite"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#C67BA5"
                                                                                data-event="backColor"
                                                                                data-value="#C67BA5" data-title="Puce"
                                                                                aria-label="Puce" data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#CE0000"
                                                                                data-event="backColor"
                                                                                data-value="#CE0000"
                                                                                data-title="Guardsman Red"
                                                                                aria-label="Guardsman Red"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#E79439"
                                                                                data-event="backColor"
                                                                                data-value="#E79439"
                                                                                data-title="Fire Bush"
                                                                                aria-label="Fire Bush"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#EFC631"
                                                                                data-event="backColor"
                                                                                data-value="#EFC631"
                                                                                data-title="Golden Dream"
                                                                                aria-label="Golden Dream"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#6BA54A"
                                                                                data-event="backColor"
                                                                                data-value="#6BA54A"
                                                                                data-title="Chelsea Cucumber"
                                                                                aria-label="Chelsea Cucumber"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#4A7B8C"
                                                                                data-event="backColor"
                                                                                data-value="#4A7B8C"
                                                                                data-title="Smalt Blue"
                                                                                aria-label="Smalt Blue"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#3984C6"
                                                                                data-event="backColor"
                                                                                data-value="#3984C6"
                                                                                data-title="Boston Blue"
                                                                                aria-label="Boston Blue"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#634AA5"
                                                                                data-event="backColor"
                                                                                data-value="#634AA5"
                                                                                data-title="Butterfly Bush"
                                                                                aria-label="Butterfly Bush"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#A54A7B"
                                                                                data-event="backColor"
                                                                                data-value="#A54A7B"
                                                                                data-title="Cadillac"
                                                                                aria-label="Cadillac"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#9C0000"
                                                                                data-event="backColor"
                                                                                data-value="#9C0000"
                                                                                data-title="Sangria"
                                                                                aria-label="Sangria"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#B56308"
                                                                                data-event="backColor"
                                                                                data-value="#B56308"
                                                                                data-title="Mai Tai"
                                                                                aria-label="Mai Tai"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#BD9400"
                                                                                data-event="backColor"
                                                                                data-value="#BD9400"
                                                                                data-title="Buddha Gold"
                                                                                aria-label="Buddha Gold"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#397B21"
                                                                                data-event="backColor"
                                                                                data-value="#397B21"
                                                                                data-title="Forest Green"
                                                                                aria-label="Forest Green"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#104A5A"
                                                                                data-event="backColor"
                                                                                data-value="#104A5A" data-title="Eden"
                                                                                aria-label="Eden" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#085294"
                                                                                data-event="backColor"
                                                                                data-value="#085294"
                                                                                data-title="Venice Blue"
                                                                                aria-label="Venice Blue"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#311873"
                                                                                data-event="backColor"
                                                                                data-value="#311873"
                                                                                data-title="Meteorite"
                                                                                aria-label="Meteorite"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#731842"
                                                                                data-event="backColor"
                                                                                data-value="#731842" data-title="Claret"
                                                                                aria-label="Claret" data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#630000"
                                                                                data-event="backColor"
                                                                                data-value="#630000"
                                                                                data-title="Rosewood"
                                                                                aria-label="Rosewood"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#7B3900"
                                                                                data-event="backColor"
                                                                                data-value="#7B3900"
                                                                                data-title="Cinnamon"
                                                                                aria-label="Cinnamon"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#846300"
                                                                                data-event="backColor"
                                                                                data-value="#846300" data-title="Olive"
                                                                                aria-label="Olive" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#295218"
                                                                                data-event="backColor"
                                                                                data-value="#295218"
                                                                                data-title="Parsley"
                                                                                aria-label="Parsley"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#083139"
                                                                                data-event="backColor"
                                                                                data-value="#083139" data-title="Tiber"
                                                                                aria-label="Tiber" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#003163"
                                                                                data-event="backColor"
                                                                                data-value="#003163"
                                                                                data-title="Midnight Blue"
                                                                                aria-label="Midnight Blue"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#21104A"
                                                                                data-event="backColor"
                                                                                data-value="#21104A"
                                                                                data-title="Valentino"
                                                                                aria-label="Valentino"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#4A1031"
                                                                                data-event="backColor"
                                                                                data-value="#4A1031" data-title="Loulou"
                                                                                aria-label="Loulou" data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                    </div>
                                                                </div>
                                                                <div><button type="button"
                                                                        class="note-color-select btn btn-light btn-default"
                                                                        data-event="openPalette"
                                                                        data-value="backColorPicker">Select</button><input
                                                                        type="color" id="backColorPicker"
                                                                        class="note-btn note-color-select-btn"
                                                                        value="#FFFF00" data-event="backColorPalette">
                                                                </div>
                                                                <div class="note-holder-custom" id="backColorPalette"
                                                                    data-event="backColor">
                                                                    <div class="note-color-palette">
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="backColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="backColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="backColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="backColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="backColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="backColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="backColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="backColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="note-palette">
                                                                <div class="note-palette-title">Text Color</div>
                                                                <div><button type="button"
                                                                        class="note-color-reset btn btn-light btn-default"
                                                                        data-event="removeFormat"
                                                                        data-value="foreColor">Reset to default</button>
                                                                </div>
                                                                <div class="note-holder" data-event="foreColor">
                                                                    <!-- fore colors -->
                                                                    <div class="note-color-palette">
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#000000"
                                                                                data-event="foreColor"
                                                                                data-value="#000000" data-title="Black"
                                                                                aria-label="Black" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#424242"
                                                                                data-event="foreColor"
                                                                                data-value="#424242"
                                                                                data-title="Tundora"
                                                                                aria-label="Tundora"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#636363"
                                                                                data-event="foreColor"
                                                                                data-value="#636363"
                                                                                data-title="Dove Gray"
                                                                                aria-label="Dove Gray"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#9C9C94"
                                                                                data-event="foreColor"
                                                                                data-value="#9C9C94"
                                                                                data-title="Star Dust"
                                                                                aria-label="Star Dust"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#CEC6CE"
                                                                                data-event="foreColor"
                                                                                data-value="#CEC6CE"
                                                                                data-title="Pale Slate"
                                                                                aria-label="Pale Slate"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#EFEFEF"
                                                                                data-event="foreColor"
                                                                                data-value="#EFEFEF"
                                                                                data-title="Gallery"
                                                                                aria-label="Gallery"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#F7F7F7"
                                                                                data-event="foreColor"
                                                                                data-value="#F7F7F7"
                                                                                data-title="Alabaster"
                                                                                aria-label="Alabaster"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="foreColor"
                                                                                data-value="#FFFFFF" data-title="White"
                                                                                aria-label="White" data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FF0000"
                                                                                data-event="foreColor"
                                                                                data-value="#FF0000" data-title="Red"
                                                                                aria-label="Red" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FF9C00"
                                                                                data-event="foreColor"
                                                                                data-value="#FF9C00"
                                                                                data-title="Orange Peel"
                                                                                aria-label="Orange Peel"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFF00"
                                                                                data-event="foreColor"
                                                                                data-value="#FFFF00" data-title="Yellow"
                                                                                aria-label="Yellow" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#00FF00"
                                                                                data-event="foreColor"
                                                                                data-value="#00FF00" data-title="Green"
                                                                                aria-label="Green" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#00FFFF"
                                                                                data-event="foreColor"
                                                                                data-value="#00FFFF" data-title="Cyan"
                                                                                aria-label="Cyan" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#0000FF"
                                                                                data-event="foreColor"
                                                                                data-value="#0000FF" data-title="Blue"
                                                                                aria-label="Blue" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#9C00FF"
                                                                                data-event="foreColor"
                                                                                data-value="#9C00FF"
                                                                                data-title="Electric Violet"
                                                                                aria-label="Electric Violet"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FF00FF"
                                                                                data-event="foreColor"
                                                                                data-value="#FF00FF"
                                                                                data-title="Magenta"
                                                                                aria-label="Magenta"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#F7C6CE"
                                                                                data-event="foreColor"
                                                                                data-value="#F7C6CE" data-title="Azalea"
                                                                                aria-label="Azalea" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFE7CE"
                                                                                data-event="foreColor"
                                                                                data-value="#FFE7CE" data-title="Karry"
                                                                                aria-label="Karry" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFEFC6"
                                                                                data-event="foreColor"
                                                                                data-value="#FFEFC6"
                                                                                data-title="Egg White"
                                                                                aria-label="Egg White"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#D6EFD6"
                                                                                data-event="foreColor"
                                                                                data-value="#D6EFD6" data-title="Zanah"
                                                                                aria-label="Zanah" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#CEDEE7"
                                                                                data-event="foreColor"
                                                                                data-value="#CEDEE7"
                                                                                data-title="Botticelli"
                                                                                aria-label="Botticelli"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#CEE7F7"
                                                                                data-event="foreColor"
                                                                                data-value="#CEE7F7"
                                                                                data-title="Tropical Blue"
                                                                                aria-label="Tropical Blue"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#D6D6E7"
                                                                                data-event="foreColor"
                                                                                data-value="#D6D6E7"
                                                                                data-title="Mischka"
                                                                                aria-label="Mischka"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#E7D6DE"
                                                                                data-event="foreColor"
                                                                                data-value="#E7D6DE"
                                                                                data-title="Twilight"
                                                                                aria-label="Twilight"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#E79C9C"
                                                                                data-event="foreColor"
                                                                                data-value="#E79C9C"
                                                                                data-title="Tonys Pink"
                                                                                aria-label="Tonys Pink"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFC69C"
                                                                                data-event="foreColor"
                                                                                data-value="#FFC69C"
                                                                                data-title="Peach Orange"
                                                                                aria-label="Peach Orange"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFE79C"
                                                                                data-event="foreColor"
                                                                                data-value="#FFE79C"
                                                                                data-title="Cream Brulee"
                                                                                aria-label="Cream Brulee"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#B5D6A5"
                                                                                data-event="foreColor"
                                                                                data-value="#B5D6A5" data-title="Sprout"
                                                                                aria-label="Sprout" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#A5C6CE"
                                                                                data-event="foreColor"
                                                                                data-value="#A5C6CE" data-title="Casper"
                                                                                aria-label="Casper" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#9CC6EF"
                                                                                data-event="foreColor"
                                                                                data-value="#9CC6EF" data-title="Perano"
                                                                                aria-label="Perano" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#B5A5D6"
                                                                                data-event="foreColor"
                                                                                data-value="#B5A5D6"
                                                                                data-title="Cold Purple"
                                                                                aria-label="Cold Purple"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#D6A5BD"
                                                                                data-event="foreColor"
                                                                                data-value="#D6A5BD"
                                                                                data-title="Careys Pink"
                                                                                aria-label="Careys Pink"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#E76363"
                                                                                data-event="foreColor"
                                                                                data-value="#E76363" data-title="Mandy"
                                                                                aria-label="Mandy" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#F7AD6B"
                                                                                data-event="foreColor"
                                                                                data-value="#F7AD6B" data-title="Rajah"
                                                                                aria-label="Rajah" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFD663"
                                                                                data-event="foreColor"
                                                                                data-value="#FFD663"
                                                                                data-title="Dandelion"
                                                                                aria-label="Dandelion"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#94BD7B"
                                                                                data-event="foreColor"
                                                                                data-value="#94BD7B"
                                                                                data-title="Olivine"
                                                                                aria-label="Olivine"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#73A5AD"
                                                                                data-event="foreColor"
                                                                                data-value="#73A5AD"
                                                                                data-title="Gulf Stream"
                                                                                aria-label="Gulf Stream"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#6BADDE"
                                                                                data-event="foreColor"
                                                                                data-value="#6BADDE" data-title="Viking"
                                                                                aria-label="Viking" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#8C7BC6"
                                                                                data-event="foreColor"
                                                                                data-value="#8C7BC6"
                                                                                data-title="Blue Marguerite"
                                                                                aria-label="Blue Marguerite"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#C67BA5"
                                                                                data-event="foreColor"
                                                                                data-value="#C67BA5" data-title="Puce"
                                                                                aria-label="Puce" data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#CE0000"
                                                                                data-event="foreColor"
                                                                                data-value="#CE0000"
                                                                                data-title="Guardsman Red"
                                                                                aria-label="Guardsman Red"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#E79439"
                                                                                data-event="foreColor"
                                                                                data-value="#E79439"
                                                                                data-title="Fire Bush"
                                                                                aria-label="Fire Bush"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#EFC631"
                                                                                data-event="foreColor"
                                                                                data-value="#EFC631"
                                                                                data-title="Golden Dream"
                                                                                aria-label="Golden Dream"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#6BA54A"
                                                                                data-event="foreColor"
                                                                                data-value="#6BA54A"
                                                                                data-title="Chelsea Cucumber"
                                                                                aria-label="Chelsea Cucumber"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#4A7B8C"
                                                                                data-event="foreColor"
                                                                                data-value="#4A7B8C"
                                                                                data-title="Smalt Blue"
                                                                                aria-label="Smalt Blue"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#3984C6"
                                                                                data-event="foreColor"
                                                                                data-value="#3984C6"
                                                                                data-title="Boston Blue"
                                                                                aria-label="Boston Blue"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#634AA5"
                                                                                data-event="foreColor"
                                                                                data-value="#634AA5"
                                                                                data-title="Butterfly Bush"
                                                                                aria-label="Butterfly Bush"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#A54A7B"
                                                                                data-event="foreColor"
                                                                                data-value="#A54A7B"
                                                                                data-title="Cadillac"
                                                                                aria-label="Cadillac"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#9C0000"
                                                                                data-event="foreColor"
                                                                                data-value="#9C0000"
                                                                                data-title="Sangria"
                                                                                aria-label="Sangria"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#B56308"
                                                                                data-event="foreColor"
                                                                                data-value="#B56308"
                                                                                data-title="Mai Tai"
                                                                                aria-label="Mai Tai"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#BD9400"
                                                                                data-event="foreColor"
                                                                                data-value="#BD9400"
                                                                                data-title="Buddha Gold"
                                                                                aria-label="Buddha Gold"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#397B21"
                                                                                data-event="foreColor"
                                                                                data-value="#397B21"
                                                                                data-title="Forest Green"
                                                                                aria-label="Forest Green"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#104A5A"
                                                                                data-event="foreColor"
                                                                                data-value="#104A5A" data-title="Eden"
                                                                                aria-label="Eden" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#085294"
                                                                                data-event="foreColor"
                                                                                data-value="#085294"
                                                                                data-title="Venice Blue"
                                                                                aria-label="Venice Blue"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#311873"
                                                                                data-event="foreColor"
                                                                                data-value="#311873"
                                                                                data-title="Meteorite"
                                                                                aria-label="Meteorite"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#731842"
                                                                                data-event="foreColor"
                                                                                data-value="#731842" data-title="Claret"
                                                                                aria-label="Claret" data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#630000"
                                                                                data-event="foreColor"
                                                                                data-value="#630000"
                                                                                data-title="Rosewood"
                                                                                aria-label="Rosewood"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#7B3900"
                                                                                data-event="foreColor"
                                                                                data-value="#7B3900"
                                                                                data-title="Cinnamon"
                                                                                aria-label="Cinnamon"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#846300"
                                                                                data-event="foreColor"
                                                                                data-value="#846300" data-title="Olive"
                                                                                aria-label="Olive" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#295218"
                                                                                data-event="foreColor"
                                                                                data-value="#295218"
                                                                                data-title="Parsley"
                                                                                aria-label="Parsley"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#083139"
                                                                                data-event="foreColor"
                                                                                data-value="#083139" data-title="Tiber"
                                                                                aria-label="Tiber" data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#003163"
                                                                                data-event="foreColor"
                                                                                data-value="#003163"
                                                                                data-title="Midnight Blue"
                                                                                aria-label="Midnight Blue"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#21104A"
                                                                                data-event="foreColor"
                                                                                data-value="#21104A"
                                                                                data-title="Valentino"
                                                                                aria-label="Valentino"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#4A1031"
                                                                                data-event="foreColor"
                                                                                data-value="#4A1031" data-title="Loulou"
                                                                                aria-label="Loulou" data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                    </div>
                                                                </div>
                                                                <div><button type="button"
                                                                        class="note-color-select btn btn-light btn-default"
                                                                        data-event="openPalette"
                                                                        data-value="foreColorPicker">Select</button><input
                                                                        type="color" id="foreColorPicker"
                                                                        class="note-btn note-color-select-btn"
                                                                        value="#000000" data-event="foreColorPalette">
                                                                </div>
                                                                <div class="note-holder-custom" id="foreColorPalette"
                                                                    data-event="foreColor">
                                                                    <div class="note-color-palette">
                                                                        <div class="note-color-row"><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="foreColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="foreColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="foreColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="foreColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="foreColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="foreColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="foreColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button><button
                                                                                type="button"
                                                                                class="note-btn note-color-btn"
                                                                                style="background-color:#FFFFFF"
                                                                                data-event="foreColor"
                                                                                data-value="#FFFFFF"
                                                                                data-title="#FFFFFF"
                                                                                aria-label="#FFFFFF"
                                                                                data-toggle="button"
                                                                                tabindex="-1"></button></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-btn-group note-para"><button type="button"
                                                        class="note-btn" tabindex="-1"
                                                        aria-label="Unordered list (CTRL+SHIFT+NUM7)"><i
                                                            class="note-icon-unorderedlist"></i></button><button
                                                        type="button" class="note-btn" tabindex="-1"
                                                        aria-label="Ordered list (CTRL+SHIFT+NUM8)"><i
                                                            class="note-icon-orderedlist"></i></button>
                                                    <div class="note-btn-group"><button type="button"
                                                            class="note-btn dropdown-toggle" tabindex="-1"
                                                            data-toggle="dropdown" aria-label="Paragraph"><i
                                                                class="note-icon-align-left"> <span
                                                                    class="note-icon-caret"></span></i></button>
                                                        <div class="note-dropdown-menu" role="list">
                                                            <div class="note-btn-group note-align"><button type="button"
                                                                    class="note-btn" tabindex="-1"
                                                                    aria-label="Align left (CTRL+SHIFT+L)"><i
                                                                        class="note-icon-align-left"></i></button><button
                                                                    type="button" class="note-btn" tabindex="-1"
                                                                    aria-label="Align center (CTRL+SHIFT+E)"><i
                                                                        class="note-icon-align-center"></i></button><button
                                                                    type="button" class="note-btn" tabindex="-1"
                                                                    aria-label="Align right (CTRL+SHIFT+R)"><i
                                                                        class="note-icon-align-right"></i></button><button
                                                                    type="button" class="note-btn" tabindex="-1"
                                                                    aria-label="Justify full (CTRL+SHIFT+J)"><i
                                                                        class="note-icon-align-justify"></i></button>
                                                            </div>
                                                            <div class="note-btn-group note-list"><button type="button"
                                                                    class="note-btn" tabindex="-1"
                                                                    aria-label="Outdent (CTRL+[)"><i
                                                                        class="note-icon-align-outdent"></i></button><button
                                                                    type="button" class="note-btn" tabindex="-1"
                                                                    aria-label="Indent (CTRL+])"><i
                                                                        class="note-icon-align-indent"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-btn-group note-table">
                                                    <div class="note-btn-group"><button type="button"
                                                            class="note-btn dropdown-toggle" tabindex="-1"
                                                            data-toggle="dropdown" aria-label="Table"><i
                                                                class="note-icon-table"> <span
                                                                    class="note-icon-caret"></span></i></button>
                                                        <div class="note-dropdown-menu note-table" role="list"
                                                            aria-label="Table">
                                                            <div class="note-dimension-picker">
                                                                <div class="note-dimension-picker-mousecatcher"
                                                                    data-event="insertTable" data-value="1x1"
                                                                    style="width: 10em; height: 10em;"></div>
                                                                <div class="note-dimension-picker-highlighted"></div>
                                                                <div class="note-dimension-picker-unhighlighted"></div>
                                                            </div>
                                                            <div class="note-dimension-display">1 x 1</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-btn-group note-insert"><button type="button"
                                                        class="note-btn" tabindex="-1" aria-label="Link (CTRL+K)"><i
                                                            class="note-icon-link"></i></button><button type="button"
                                                        class="note-btn" tabindex="-1" aria-label="Picture"><i
                                                            class="note-icon-picture"></i></button><button type="button"
                                                        class="note-btn" tabindex="-1" aria-label="Video"><i
                                                            class="note-icon-video"></i></button></div>
                                                <div class="note-btn-group note-view"><button type="button"
                                                        class="note-btn btn-fullscreen note-codeview-keep" tabindex="-1"
                                                        aria-label="Full Screen"><i
                                                            class="note-icon-arrows-alt"></i></button><button
                                                        type="button" class="note-btn btn-codeview note-codeview-keep"
                                                        tabindex="-1" aria-label="Code View"><i
                                                            class="note-icon-code"></i></button><button type="button"
                                                        class="note-btn" tabindex="-1" aria-label="Help"><i
                                                            class="note-icon-question"></i></button></div>
                                            </div>
                                            <div class="note-editing-area">
                                                <div class="note-placeholder" style="display: block;">Type...</div>
                                                <div class="note-handle">
                                                    <div class="note-control-selection">
                                                        <div class="note-control-selection-bg"></div>
                                                        <div class="note-control-holder note-control-nw"></div>
                                                        <div class="note-control-holder note-control-ne"></div>
                                                        <div class="note-control-holder note-control-sw"></div>
                                                        <div class="note-control-sizing note-control-se"></div>
                                                        <div class="note-control-selection-info"></div>
                                                    </div>
                                                </div><textarea class="note-codable" aria-multiline="true"></textarea>
                                                <div class="note-editable" contenteditable="true" role="textbox"
                                                    aria-multiline="true" spellcheck="true" autocorrect="true"
                                                    style="height: 200px;">
                                                    <p><br></p>
                                                </div>
                                            </div><output class="note-status-output" role="status"
                                                aria-live="polite"></output>
                                            <div class="note-statusbar" role="status">
                                                <div class="note-resizebar" aria-label="resize">
                                                    <div class="note-icon-bar"></div>
                                                    <div class="note-icon-bar"></div>
                                                    <div class="note-icon-bar"></div>
                                                </div>
                                            </div>
                                            <div class="note-modal link-dialog" aria-hidden="false" tabindex="-1"
                                                role="dialog" aria-label="Insert Link">
                                                <div class="note-modal-content">
                                                    <div class="note-modal-header"><button type="button" class="close"
                                                            aria-label="Close" aria-hidden="true"><i
                                                                class="note-icon-close"></i></button>
                                                        <h4 class="note-modal-title">Insert Link</h4>
                                                    </div>
                                                    <div class="note-modal-body">
                                                        <div class="form-group note-form-group"><label
                                                                for="note-dialog-link-txt-16503993747821"
                                                                class="note-form-label">Text to display</label><input
                                                                id="note-dialog-link-txt-16503993747821"
                                                                class="note-link-text form-control note-form-control note-input"
                                                                type="text"></div>
                                                        <div class="form-group note-form-group"><label
                                                                for="note-dialog-link-url-16503993747821"
                                                                class="note-form-label">To what URL should this link
                                                                go?</label><input
                                                                id="note-dialog-link-url-16503993747821"
                                                                class="note-link-url form-control note-form-control note-input"
                                                                type="text" value="http://"></div>
                                                        <div class="checkbox sn-checkbox-open-in-new-window">
                                                            <label><input role="checkbox" type="checkbox" checked=""
                                                                    aria-checked="true">Open in new window</label>
                                                        </div>
                                                        <div class="checkbox sn-checkbox-use-protocol"><label><input
                                                                    role="checkbox" type="checkbox" checked=""
                                                                    aria-checked="true">Use default protocol</label>
                                                        </div>
                                                    </div>
                                                    <div class="note-modal-footer"><input type="button" href="#"
                                                            class="btn btn-primary note-btn note-btn-primary note-link-btn"
                                                            value="Insert Link" disabled=""></div>
                                                </div>
                                            </div>
                                            <div class="note-popover bottom note-link-popover" style="display: none;">
                                                <div class="note-popover-arrow"></div>
                                                <div class="popover-content note-children-container"><span><a
                                                            target="_blank"></a>&nbsp;</span>
                                                    <div class="note-btn-group note-link"><button type="button"
                                                            class="note-btn" tabindex="-1" aria-label="Edit"><i
                                                                class="note-icon-link"></i></button><button
                                                            type="button" class="note-btn" tabindex="-1"
                                                            aria-label="Unlink"><i
                                                                class="note-icon-chain-broken"></i></button></div>
                                                </div>
                                            </div>
                                            <div class="note-modal" aria-hidden="false" tabindex="-1" role="dialog"
                                                aria-label="Insert Image">
                                                <div class="note-modal-content">
                                                    <div class="note-modal-header"><button type="button" class="close"
                                                            aria-label="Close" aria-hidden="true"><i
                                                                class="note-icon-close"></i></button>
                                                        <h4 class="note-modal-title">Insert Image</h4>
                                                    </div>
                                                    <div class="note-modal-body">
                                                        <div
                                                            class="form-group note-form-group note-group-select-from-files">
                                                            <label for="note-dialog-image-file-16503993747821"
                                                                class="note-form-label">Select from files</label><input
                                                                id="note-dialog-image-file-16503993747821"
                                                                class="note-image-input form-control-file note-form-control note-input"
                                                                type="file" name="files" accept="image/*"
                                                                multiple="multiple">
                                                        </div>
                                                        <div class="form-group note-group-image-url"><label
                                                                for="note-dialog-image-url-16503993747821"
                                                                class="note-form-label">Image URL</label><input
                                                                id="note-dialog-image-url-16503993747821"
                                                                class="note-image-url form-control note-form-control note-input"
                                                                type="text"></div>
                                                    </div>
                                                    <div class="note-modal-footer"><input type="button" href="#"
                                                            class="btn btn-primary note-btn note-btn-primary note-image-btn"
                                                            value="Insert Image" disabled=""></div>
                                                </div>
                                            </div>
                                            <div class="note-popover bottom note-image-popover" style="display: none;">
                                                <div class="note-popover-arrow"></div>
                                                <div class="popover-content note-children-container">
                                                    <div class="note-btn-group note-resize"><button type="button"
                                                            class="note-btn" tabindex="-1"
                                                            aria-label="Resize full"><span
                                                                class="note-fontsize-10">100%</span></button><button
                                                            type="button" class="note-btn" tabindex="-1"
                                                            aria-label="Resize half"><span
                                                                class="note-fontsize-10">50%</span></button><button
                                                            type="button" class="note-btn" tabindex="-1"
                                                            aria-label="Resize quarter"><span
                                                                class="note-fontsize-10">25%</span></button><button
                                                            type="button" class="note-btn" tabindex="-1"
                                                            aria-label="Original size"><i
                                                                class="note-icon-rollback"></i></button></div>
                                                    <div class="note-btn-group note-float"><button type="button"
                                                            class="note-btn" tabindex="-1" aria-label="Float Left"><i
                                                                class="note-icon-float-left"></i></button><button
                                                            type="button" class="note-btn" tabindex="-1"
                                                            aria-label="Float Right"><i
                                                                class="note-icon-float-right"></i></button><button
                                                            type="button" class="note-btn" tabindex="-1"
                                                            aria-label="Remove float"><i
                                                                class="note-icon-rollback"></i></button></div>
                                                    <div class="note-btn-group note-remove"><button type="button"
                                                            class="note-btn" tabindex="-1" aria-label="Remove Image"><i
                                                                class="note-icon-trash"></i></button></div>
                                                </div>
                                            </div>
                                            <div class="note-popover bottom note-table-popover" style="display: none;">
                                                <div class="note-popover-arrow"></div>
                                                <div class="popover-content note-children-container">
                                                    <div class="note-btn-group note-add"><button type="button"
                                                            class="note-btn btn-md" tabindex="-1"
                                                            aria-label="Add row below"><i
                                                                class="note-icon-row-below"></i></button><button
                                                            type="button" class="note-btn btn-md" tabindex="-1"
                                                            aria-label="Add row above"><i
                                                                class="note-icon-row-above"></i></button><button
                                                            type="button" class="note-btn btn-md" tabindex="-1"
                                                            aria-label="Add column left"><i
                                                                class="note-icon-col-before"></i></button><button
                                                            type="button" class="note-btn btn-md" tabindex="-1"
                                                            aria-label="Add column right"><i
                                                                class="note-icon-col-after"></i></button></div>
                                                    <div class="note-btn-group note-delete"><button type="button"
                                                            class="note-btn btn-md" tabindex="-1"
                                                            aria-label="Delete row"><i
                                                                class="note-icon-row-remove"></i></button><button
                                                            type="button" class="note-btn btn-md" tabindex="-1"
                                                            aria-label="Delete column"><i
                                                                class="note-icon-col-remove"></i></button><button
                                                            type="button" class="note-btn btn-md" tabindex="-1"
                                                            aria-label="Delete table"><i
                                                                class="note-icon-trash"></i></button></div>
                                                </div>
                                            </div>
                                            <div class="note-modal" aria-hidden="false" tabindex="-1" role="dialog"
                                                aria-label="Insert Video">
                                                <div class="note-modal-content">
                                                    <div class="note-modal-header"><button type="button" class="close"
                                                            aria-label="Close" aria-hidden="true"><i
                                                                class="note-icon-close"></i></button>
                                                        <h4 class="note-modal-title">Insert Video</h4>
                                                    </div>
                                                    <div class="note-modal-body">
                                                        <div class="form-group note-form-group row-fluid"><label
                                                                for="note-dialog-video-url-16503993747821"
                                                                class="note-form-label">Video URL <small
                                                                    class="text-muted">(YouTube, Vimeo, Vine, Instagram,
                                                                    DailyMotion or Youku)</small></label><input
                                                                id="note-dialog-video-url-16503993747821"
                                                                class="note-video-url form-control note-form-control note-input"
                                                                type="text"></div>
                                                    </div>
                                                    <div class="note-modal-footer"><input type="button" href="#"
                                                            class="btn btn-primary note-btn note-btn-primary note-video-btn"
                                                            value="Insert Video" disabled=""></div>
                                                </div>
                                            </div>
                                            <div class="note-modal" aria-hidden="false" tabindex="-1" role="dialog"
                                                aria-label="Help">
                                                <div class="note-modal-content">
                                                    <div class="note-modal-header"><button type="button" class="close"
                                                            aria-label="Close" aria-hidden="true"><i
                                                                class="note-icon-close"></i></button>
                                                        <h4 class="note-modal-title">Help</h4>
                                                    </div>
                                                    <div class="note-modal-body"
                                                        style="max-height: 300px; overflow: scroll;">
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>ESC</kbd></label><span>Escape</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert
                                                            Paragraph</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undo
                                                            the last command</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redo
                                                            the last command</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set
                                                            a bold style</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set
                                                            a italic style</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set
                                                            a underline style</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set
                                                            a strikethrough style</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean
                                                            a style</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set
                                                            left align</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set
                                                            center align</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set
                                                            right align</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set
                                                            full align</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle
                                                            unordered list</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle
                                                            ordered list</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent
                                                            on current paragraph</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent
                                                            on current paragraph</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change
                                                            current block's format as a paragraph(P tag)</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change
                                                            current block's format as H1</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change
                                                            current block's format as H2</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change
                                                            current block's format as H3</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change
                                                            current block's format as H4</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change
                                                            current block's format as H5</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change
                                                            current block's format as H6</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert
                                                            horizontal rule</span>
                                                        <div class="help-list-item"></div><label
                                                            style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show
                                                            Link Dialog</span>
                                                    </div>
                                                    <div class="note-modal-footer">
                                                        <p class="text-center"><a href="http://summernote.org/"
                                                                target="_blank">Summernote 0.8.18</a> · <a
                                                                href="https://github.com/summernote/summernote"
                                                                target="_blank">Project</a> · <a
                                                                href="https://github.com/summernote/summernote/issues"
                                                                target="_blank">Issues</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-success">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-burger mailbox-compose-btn" data-bs-toggle="modal"
                        data-bs-target="#composeModal"><i class="material-icons-outlined">create</i></button>
                    <?php
                    $db_sms_get_query = "SELECT * FROM customer_contact";
                    $db_sms = mysqli_query($db_connect, $db_sms_get_query);
                    ?>
                    <?php foreach ($db_sms as $sms) : ?>
                    <div class="card" style="height: 50%;">
                        <div class="container-fluid scroll">
                            <div class="row">
                                <div class="mailbox-open-content col-xl-12">
                                    <span class="mailbox-open-date">Jul 9, 2021, 9:07 AM</span>
                                    <h5 class="mailbox-open-title">
                                        <?= $sms['subject'] ?>
                                    </h5>
                                    <div class="mailbox-open-author">
                                        <img src="../uploads/profile_photos/default_profile_photo.jpg" alt="">
                                        <div class="mailbox-open-author-info">
                                            <span
                                                class="mailbox-open-author-info-email d-block"><?= $sms['customer_email'] ?></span>
                                            <span class="mailbox-open-author-info-to">To <span
                                                    class="badge badge-info align-self-center">devs</span></span>
                                        </div>
                                        <div class="mailbox-open-actions">
                                            <a href="#" class="btn btn-primary">Forward</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                    <div class="mailbox-open-content-email">
                                        <p><?= $sms['customer_message'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('./include/footer.php'); ?>