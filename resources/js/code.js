import CodeTool  from '@editorjs/code';

document.addEventListener('DOMContentLoaded', () => {
    // Ensure the registry exists
    window.filamentEditorJsTools = window.filamentEditorJsTools || {};

    // Register the tool
    // The key ('code') must match the key you use in your PHP addPlugin() method.
    window.filamentEditorJsTools.code = CodeTool;
});
