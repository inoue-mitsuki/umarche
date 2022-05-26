<x-tests.app>
    <x-slot name='header'>
        ヘッダー2
    </x-slot>
    component-test2
    <x-test-class-base classBaseMessage='クラスベースメッセージです。'/>
    <div class='mb-4'></div>
    <x-test-class-base classBaseMessage='クラスベースメッセージです。' defaultMessage='初期値から変更しています。' />
</x-tests.app>