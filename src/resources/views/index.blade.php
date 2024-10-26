@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--important">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--name-text">
                            <input type="text" name="name" placeholder="例: 山田" value="{{ old('name') }}" />
                            <input type="text" name="name" placeholder="例: 太郎" value="{{ old('name') }}" />
                        </div>
                        <div class="form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--important">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--radio">
                            <label class="form__input--radio-man" for="man">
                                <input id="man" type="radio" name="sex"  checked="checked"/>
                            男性</label>
                            <label class="form__input--radio-woman" for="woman">
                                <input id="woman" type="radio" name="sex"/>
                            女性</label>
                            <label class="form__input--radio-other" for="other">
                                <input  id="other" type="radio" name="sex" />
                            その他</label>
                        </div>
                        <div class="form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--important">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--email">
                            <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--important">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--tel-text">
                            <input type="tel" name="tel" placeholder="080" value="{{ old('tel') }}" />
                            <span class="form__label--item">-</span>
                            <input type="tel" name="tel" placeholder="1234" value="{{ old('tel') }}" />
                            <span class="form__label--item">-</span>
                            <input type="tel" name="tel" placeholder="5678" value="{{ old('tel') }}" />
                        </div>
                        <div class="form__error">
                            @error('tel')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--important">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--address-text">
                            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                    <div class="form__group">
                        <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--address-text">
                            <input type="text" name="address" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--important">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--confirm-category">
                            <select class="form__input--confirm-category__item-select">
                                <option value="">選択してください</option>
                            </select>
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容 </span>
                        <span class="form__label--important">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="お問い合わせ内容をご記載ください">{{ old('content') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>
@endsection
