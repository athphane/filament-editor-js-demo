# Filament Editor.js Demo

A bare Laravel application demonstrating how to use the [filament-editorjs](https://github.com/athphane/filament-editorjs) package with Filament.

## Purpose

This project exists solely to show how to integrate and use the `athphane/filament-editorjs` package in a Filament-powered Laravel application. It provides a working example of a Post resource with an Editor.js rich text editor.

## Features Demonstrated

- **Post Resource**: A simple CRUD interface for managing blog posts
- **Editor.js Integration**: Rich text editor with multiple tools:
  - Checklist (`@editorjs/checklist`)
  - Code Tool (`@editorjs/code`)
  - Link Tool (`@editorjs/link`)
- **Media Library Support**: Image uploads via Spatie Media Library

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/filament-editor-js-demo.git
   cd filament-editor-js-demo
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   ```

3. Set up the environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Run migrations:
   ```bash
   php artisan migrate
   ```

5. Build assets:
   ```bash
   npm run build
   ```

6. Serve the application:
   ```bash
   php artisan serve
   ```

7. Visit `http://localhost:8000/admin` to access Filament

## Usage

### Creating a Post

1. Navigate to Posts → Create Post
2. Fill in the title and excerpt
3. Use the Editor.js editor to write rich content with:
   - Text blocks
   - Checklists
   - Code blocks with syntax highlighting
   - Links
   - Images (via media upload)

### Customizing Editor.js Tools

To add or modify Editor.js tools, edit `resources/js/filament-editorjs-extensions.js`:

```javascript
import YourTool from '@editorjs/your-tool'

window.filamentEditorJsTools = window.filamentEditorJsTools || {}
window.filamentEditorJsTools.yourTool = YourTool
```

Then rebuild assets:
```bash
npm run build
```

## Key Files

- `app/Filament/Resources/PostResource.php` - Post resource definition
- `app/Models/Post.php` - Post model with Editor.js trait
- `resources/js/filament-editorjs-extensions.js` - Editor.js tool registration

## Requirements

- PHP >= 8.3
- Laravel 12
- Filament 5.x
- Node.js & NPM

## Related Packages

- [filament/filament](https://filamentphp.com) - The admin panel framework
- [athphane/filament-editorjs](https://github.com/athphane/filament-editorjs) - Editor.js integration for Filament
- [spatie/laravel-medialibrary](https://github.com/spatie/laravel-medialibrary) - Media management

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
