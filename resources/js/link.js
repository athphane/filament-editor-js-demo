// resources/js/filament-editorjs-plugins/checklist.js
import LinkTool  from '@editorjs/link';

// Ensure the registry exists
window.filamentEditorJsTools = window.filamentEditorJsTools || {};

// Register the tool.
// The key ('checklist') must match the key you use in your PHP addPlugin() method.
window.filamentEditorJsTools['link-tool'] = LinkTool;
