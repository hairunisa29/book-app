<div class="space-y-6">
    
    <div>
        <x-input-label for="title" :value="__('Title')"/>
        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $book?->title)" autocomplete="title" placeholder="Title"/>
        <x-input-error class="mt-2" :messages="$errors->get('title')"/>
    </div>
    <div>
        <x-input-label for="review" :value="__('Review')"/>
        <x-text-input id="review" name="review" type="text" class="mt-1 block w-full" :value="old('review', $book?->review)" autocomplete="review" placeholder="Review"/>
        <x-input-error class="mt-2" :messages="$errors->get('review')"/>
    </div>
    <div>
        <x-input-label for="user_id" :value="__('User Id')"/>
        <x-text-input id="user_id" name="user_id" type="text" class="mt-1 block w-full" :value="old('user_id', $book?->user_id)" autocomplete="user_id" placeholder="User Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('user_id')"/>
    </div>
    <div>
        <x-input-label for="image" :value="__('Image')"/>
        <x-text-input id="image" name="image" type="text" class="mt-1 block w-full" :value="old('image', $book?->image)" autocomplete="image" placeholder="Image"/>
        <x-input-error class="mt-2" :messages="$errors->get('image')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>