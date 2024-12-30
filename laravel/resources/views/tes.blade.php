<!doctype html>
<html lang="en">
    <head>
        <title>Laravel 8 Install CKEditor Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        {{-- CKEditor CDN --}}
        <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    </head>
    <body class="bg-gray-100">
        <div class="container px-4 mx-auto mt-10">
            <form action="" method="POST">
                @csrf
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white rounded-md shadow-md">
                        <div class="px-6 py-4 border-b">
                            <h4 class="text-xl font-bold">Create Post</h4>
                        </div>
                        <div class="p-6">
                            <div class="mb-4">
                                <label class="block mb-2 font-medium text-gray-700">Title</label>
                                <input 
                                    type="text" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200" 
                                    name="title" 
                                    placeholder="Enter the Title"
                                >
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 font-medium text-gray-700">Body</label>
                                <textarea 
                                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200" 
                                    id="content" 
                                    placeholder="Enter the Description" 
                                    rows="8" 
                                    name="body"
                                ></textarea>
                            </div>
                        </div>
                        <div class="flex justify-end gap-2 px-6 py-4 border-t">
                            <button 
                                type="submit" 
                                class="px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600"
                            >
                                Save
                            </button>
                            <a 
                                href="{{ url('/') }}" 
                                class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600"
                            >
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            ClassicEditor.create(document.querySelector('#content'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    </body>
</html>
