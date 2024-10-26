@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                <h1>FashionablyLate</h1>
            </a>
        </div>
    </header>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <p class="contact-form__heading-text">Contact</p>
            </div>
            <form class="form" action="contacts/confirm" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <p class="form__label--item-name">お名前</p>
                    </div>
                    <div class="form__group-content">
                        <div class="form__name-text">
                            山田　太郎
                        </div>
                        <div class="form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__separator-line"></div>
                <div class="form__group">
                    <div class="form__group-title">
                        <p class="form__label--item-sex">性別</p>
                    </div>
                    <div class="form__group-content">
                        <div class="form__sex-type">
                            男性
                        </div>
                        <div class="form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__separator-line"></div>
                <div class="form__group">
                    <div class="form__group-title">
                        <p class="form__label--item-email">メールアドレス</p>
                    </div>
                    <div class="form__group-content">
                        <div class="form__email-text">
                            test@example.com
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__separator-line"></div>
                <div class="form__group">
                    <div class="form__group-title">
                        <p class="form__label--item-tel">電話番号</p>
                    </div>
                    <div class="form__group-content">
                        <div class="form__tel-text">
                            08012345678
                        </div>
                        <div class="form__error">
                            @error('tel')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__separator-line"></div>
                <div class="form__group">
                    <div class="form__group-title">
                        <p class="form__label--item-address">住所</p>
                    </div>
                    <div class="form__group-content">
                        <div class="form__address-text">
                            東京都渋谷区千駄ヶ谷1-2-3
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__separator-line"></div>
                <div class="form__group">
                    <div class="form__group-title">
                        <p class="form__label--item-sub-address">建物名</p>
                    </div>
                    <div class="form__group-content">
                        <div class="form__sub-address-text">
                            千駄ヶ谷マンション101
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__separator-line"></div>
                <div class="form__group">
                    <div class="form__group-title">
                        <p class="form__label--item-confirm-category">お問い合わせの種類</p>
                    </div>
                    <div class="form__group-content">
                        <div class="form__confirm-category-text">
                            商品の交換について
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__separator-line"></div>
                <div class="form__group">
                    <div class="form__group-title-confirm">
                        <p class="form__label--item-confirm">お問い合わせ内容 </p>
                    </div>
                    <div class="form__group-content">
                        <div class="form__confirm-text">
                            届いた商品が注文した商品ではありませんでした。 商品の取り替えをお願いします。
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-send" type="send">送信</button>
                    <p class="form__correctionーtext">修正</p>
                </div>
            </form>
        </div>
    </main>

</body>
@endsection

