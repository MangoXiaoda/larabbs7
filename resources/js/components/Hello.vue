<template>
    <div>
        <h1>Hello, Larvuent!</h1>
        <el-button @click.native="visible = true">按钮</el-button>
        <el-dialog v-model="visible">
            <p>欢迎使用 Element</p>
        </el-dialog>
        <el-radio v-model="radio" label="1">备选项</el-radio>
        <el-radio v-model="radio" label="2">备选项</el-radio>
        <el-switch
            v-model="value"
            active-color="#13ce66"
            inactive-color="#ff4949">
        </el-switch>
    </div>
</template>

<script>
export default {
    data() {
        return {
            visible: false,
            radio: 1,
            value: true
        }
    }
}
</script>

<style>
.hello {
    font-size: 2em;
    color: green;
}
</style>