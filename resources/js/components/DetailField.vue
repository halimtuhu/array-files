<template>
    <panel-item :field="field">
        <div slot="value" class="flex flex-row overflow-x-auto py-2">
            <p v-for="file in JSON.parse(field.value)"><a :href="file.url">{{ file.originalName }}</a></p>
        </div>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
