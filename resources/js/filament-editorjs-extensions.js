// Example: add your own EditorJS tools here.
import Checklist from '@editorjs/checklist'
import CodeTool from '@editorjs/code'
import LinkTool from '@editorjs/link'

window.filamentEditorJsTools = window.filamentEditorJsTools || {}

window.filamentEditorJsTools.checklist = Checklist
window.filamentEditorJsTools.code = CodeTool
window.filamentEditorJsTools.linkTool = LinkTool

// window.filamentEditorJsTools.linkTool = {
//     class: LinkTool,
//     inlineToolbar: true,
//     config: {
//         endpoint: '/editorjs/fetch-url',
//     },
// }
