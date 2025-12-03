import HighlightTool from 'editorjs-highlight'; // Example library

if (!window.filamentEditorJsTools) {
    window.filamentEditorJsTools = {};
}

// Register the tool class
window.filamentEditorJsTools['highlight'] = HighlightTool;
