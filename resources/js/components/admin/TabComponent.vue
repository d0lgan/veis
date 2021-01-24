<template>
    <div>
        <tabs :options="{ useUrlFragment: false }" @clicked="tabClicked" @changed="tabChanged">
            <tab name="First tab">
                This is the content of the first tab
            </tab>
            <tab name="Second tab">
                This is the content of the second tab
            </tab>
            <tab name="Disabled tab" :is-disabled="true">
                This content will be unavailable while :is-disabled prop set to true
            </tab>
            <tab id="oh-hi-mark" name="Custom fragment">
                The fragment that is appended to the url can be customized
            </tab>
            <tab prefix="<span class='glyphicon glyphicon-star'></span> "
                 name="Prefix and suffix"
                 suffix=" <span class='badge'>4</span>">
                A prefix and a suffix can be added
            </tab>
        </tabs>
    </div>
</template>
