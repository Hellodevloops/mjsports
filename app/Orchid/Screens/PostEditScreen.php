<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Post;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Upload;

class PostEditScreen extends Screen
{
    /**
     * @var Post
     */
    public $post;

    /**
     * Query data.
     *
     * @param Post $post
     *
     * @return array
     */
    public function query(Post $post): array
    {
        $this->post = $post;

        return [
            'post' => $post,
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->post->exists ? 'Edit Post' : 'Create New Post';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->post->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->post->exists),

            Button::make('Delete')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->post->exists),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('post.title')
                    ->title('Title'),

                Cropper::make('post.image')
                    ->title('Image')
                    ,

                Input::make('post.slug')
                    ->title('Slug')
                    ->placeholder('Auto-generated if left blank'),

                Input::make('post.metatitle')
                    ->title('Meta Title'),

                TextArea::make('post.metadescription')
                    ->title('Meta Description'),

                Input::make('post.keyword')
                    ->title('Keywords'),

                Input::make('post.description')
                    ->title('Description'),

                TextArea::make('post.content')
                    ->title('Content')
                    ->rows(10),
            ]),
        ];
    }

    /**
     * Store or update the Post.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request)
    {
        $this->post->fill($request->get('post'))->save();

        Alert::info('Post saved successfully.');

        return redirect()->route('platform.post.list');
    }

    /**
     * Remove the Post.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove()
    {
        $this->post->delete();

        Alert::info('Post deleted successfully.');

        return redirect()->route('platform.post.list');
    }
}
