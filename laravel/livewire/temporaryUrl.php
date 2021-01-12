<?php
@if($upload and ! $errors->has('upload'))
                <embed
                    src="{{ $upload->temporaryUrl() }}"
                    type="{{ $upload->getMimeType() }}"
                    width="100%"
                    height="500px"
                    class="my-4"
                />
@endif
