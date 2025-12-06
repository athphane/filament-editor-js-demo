<?php

namespace App\Renderers;

use Athphane\FilamentEditorjs\Renderers\BlockRenderer;

class LinkBlockRenderer extends BlockRenderer
{
    /**
     * @inheritDoc
     */
    public function render(array $block): string
    {
        $link = $block['data']['link'] ?? '';

        $meta = $block['data']['meta'] ?? [];

        $title = $meta['title'] ?? '';
        $site_name = $meta['site_name'] ?? '';
        $description = $meta['description'] ?? '';
        $image = $meta['image']['url'] ?? '';

        return view('custom-renderers.link-block', [
            'link' => $link,
            'title' => $title,
            'site_name' => $site_name,
            'description' => $description,
            'image' => $image,
            'config' => $this->config
        ])->render();
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return 'linkTool';
    }
}
