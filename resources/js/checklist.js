import Checklist from '@editorjs/checklist';

document.addEventListener('DOMContentLoaded', () => {
    // Ensure the registry exists
    window.filamentEditorJsTools = window.filamentEditorJsTools || {};

    // Register the tool.
    // The key ('checklist') must match the key you use in your PHP addPlugin() method.
    window.filamentEditorJsTools.checklist = Checklist;
});
