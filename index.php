<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <meta name="description"
        content="ইংরেজি শব্দের বাংলা অর্থ ও ভেতরের আসল sub-word খুঁজে দেখুন — রিয়েল-টাইম API সহ।" />
    <meta name="theme-color" content="#eef2ff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#0b1220" media="(prefers-color-scheme: dark)" />
    <title>ইংরেজি → বাংলা অভিধান | FARABiE IT</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link rel="icon" type="image/x-icon" href="farabie_it.jpg" />

    <style>
        :root {
            color-scheme: light;
            --bg-1: #eef2ff;
            --bg-2: #f8fafd;
            --bg-3: #e9effc;
            --glow-1: rgba(129, 140, 248, 0.55);
            --glow-2: rgba(196, 181, 253, 0.45);

            --card-bg: rgba(255, 255, 255, 0.84);
            --card-border: rgba(255, 255, 255, 0.9);
            --surface-soft: #f4f7ff;
            --field-bg: #ffffff;
            --item-bg: #ffffff;
            --item-hover: #f3f7ff;

            --text: #0c1b33;
            --muted: #5c6b85;
            --line: #e4e9f4;

            --accent: #2f5cf6;
            --accent-strong: #1d4ed8;
            --accent-soft: #eef2ff;
            --accent-line: #c7d2fe;
            --ring: rgba(47, 92, 246, 0.16);

            --btn-from: #4f7cff;
            --btn-to: #1d4ed8;

            --success: #16a34a;
            --danger: #dc2626;
            --warn-bg: #fef3c7;
            --warn-text: #92400e;

            --shadow: 0 30px 60px -28px rgba(18, 38, 86, 0.38), 0 8px 24px -14px rgba(18, 38, 86, 0.18);
        }

        :root[data-theme="light"] {
            color-scheme: light;
        }

        :root[data-theme="dark"] {
            color-scheme: dark;
            --bg-1: #0b1220;
            --bg-2: #0e1526;
            --bg-3: #111a2e;
            --glow-1: rgba(59, 91, 219, 0.35);
            --glow-2: rgba(124, 58, 237, 0.28);

            --card-bg: rgba(19, 27, 45, 0.82);
            --card-border: rgba(255, 255, 255, 0.08);
            --surface-soft: #101a30;
            --field-bg: #0f1830;
            --item-bg: #121c31;
            --item-hover: #182541;

            --text: #e8eefc;
            --muted: #9aa9c2;
            --line: #243352;

            --accent: #7c9bff;
            --accent-strong: #b6c7ff;
            --accent-soft: #1a2a52;
            --accent-line: #2c3f6e;
            --ring: rgba(124, 155, 255, 0.22);

            --btn-from: #5b82ff;
            --btn-to: #3355e0;

            --success: #34d399;
            --danger: #f87171;
            --warn-bg: #3a2c0d;
            --warn-text: #fbbf24;

            --shadow: 0 30px 60px -30px #000000, 0 8px 24px -16px #000000;
        }

        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            -webkit-text-size-adjust: 100%;
        }

        body {
            min-height: 100vh;
            min-height: 100dvh;
            display: grid;
            place-items: center;
            padding: clamp(0.7rem, 3vw, 1.75rem);
            padding-top: max(clamp(0.7rem, 3vw, 1.75rem), env(safe-area-inset-top));
            padding-bottom: calc(clamp(0.7rem, 3vw, 1.75rem) + env(safe-area-inset-bottom));
            font-family: 'Hind Siliguri', 'Noto Sans Bengali', 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: var(--text);
            background:
                radial-gradient(1000px 600px at 8% -12%, var(--glow-1), transparent 60%),
                radial-gradient(900px 550px at 105% -5%, var(--glow-2), transparent 58%),
                linear-gradient(160deg, var(--bg-1), var(--bg-2) 55%, var(--bg-3));
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        [hidden] {
            display: none !important;
        }

        .app {
            width: 100%;
            max-width: 880px;
            margin-inline: auto;
        }

        .main-card {
            background: var(--card-bg);
            backdrop-filter: blur(18px) saturate(140%);
            -webkit-backdrop-filter: blur(18px) saturate(140%);
            border: 1px solid var(--card-border);
            border-radius: 28px;
            padding: clamp(1.1rem, 3.8vw, 2.4rem);
            box-shadow: var(--shadow);
            animation: cardRise 0.5s ease both;
        }

        @keyframes cardRise {
            from {
                opacity: 0;
                transform: translateY(14px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ---------- Header ---------- */
        .app-header {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            margin-bottom: 1.5rem;
        }

        .header-icon {
            flex: none;
            display: grid;
            place-items: center;
            width: clamp(48px, 12vw, 58px);
            height: clamp(48px, 12vw, 58px);
            border-radius: 17px;
            background: linear-gradient(145deg, var(--btn-from), var(--btn-to));
            color: #fff;
            font-size: clamp(1.35rem, 4.4vw, 1.8rem);
            box-shadow: 0 14px 26px -12px rgba(29, 78, 216, 0.85);
        }

        .header-text {
            min-width: 0;
        }

        .main-title {
            display: flex;
            flex-wrap: wrap;
            align-items: baseline;
            gap: 0.4rem;
            font-size: clamp(1.18rem, 4.6vw, 1.7rem);
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.01em;
            color: var(--text);
        }

        .main-title .title-en {
            font-size: 0.7em;
            font-weight: 600;
            color: var(--muted);
        }

        .header-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.4rem;
            margin-top: 0.4rem;
        }

        .status-pill,
        .live-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.16rem 0.62rem;
            border-radius: 999px;
            font-size: 0.7rem;
            font-weight: 600;
            line-height: 1.6;
        }

        .status-pill {
            background: var(--accent-soft);
            color: var(--accent-strong);
        }

        .status-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--success);
            box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.16);
        }

        .live-pill {
            background: rgba(34, 197, 94, 0.13);
            color: #15803d;
        }

        .live-pill i {
            font-size: 0.72rem;
        }

        .theme-toggle {
            margin-left: auto;
            flex: none;
            display: grid;
            place-items: center;
            width: 44px;
            height: 44px;
            border: 1.5px solid var(--line);
            border-radius: 50%;
            background: var(--field-bg);
            color: var(--muted);
            font-size: 1.05rem;
            cursor: pointer;
            transition: background 0.15s ease, border-color 0.15s ease, color 0.15s ease, transform 0.15s ease;
        }

        .theme-toggle:hover {
            border-color: var(--accent-line);
            background: var(--accent-soft);
            color: var(--accent-strong);
        }

        .theme-toggle:active {
            transform: scale(0.94);
        }

        .theme-toggle:focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
        }

        :root[data-theme="dark"] .live-pill {
            color: #4ade80;
        }

        /* ---------- Search ---------- */
        .search {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.4rem 0.4rem 0.4rem 1rem;
            background: var(--field-bg);
            border: 1.5px solid var(--line);
            border-radius: 999px;
            box-shadow: 0 2px 10px rgba(16, 30, 60, 0.05);
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .search:focus-within {
            border-color: var(--accent);
            box-shadow: 0 0 0 4px var(--ring);
        }

        .search-icon {
            flex: none;
            font-size: 1rem;
            color: var(--muted);
        }

        .search input {
            flex: 1;
            width: 0;
            min-width: 0;
            padding: 0.62rem 0;
            border: 0;
            outline: 0;
            background: transparent;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 500;
            color: var(--text);
        }

        .search input::placeholder {
            color: var(--muted);
            font-weight: 400;
            opacity: 0.8;
        }

        .clear-btn {
            flex: none;
            display: grid;
            place-items: center;
            width: 32px;
            height: 32px;
            border: 0;
            border-radius: 50%;
            background: var(--surface-soft);
            color: var(--muted);
            font-size: 0.7rem;
            cursor: pointer;
            transition: background 0.15s ease, color 0.15s ease;
        }

        .clear-btn:hover {
            background: var(--accent-line);
            color: var(--text);
        }

        #searchBtn {
            flex: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.45rem;
            min-height: 44px;
            padding: 0.62rem 1.3rem;
            border: 0;
            border-radius: 999px;
            background: linear-gradient(145deg, var(--btn-from), var(--btn-to));
            color: #fff;
            font-family: inherit;
            font-size: 0.95rem;
            font-weight: 600;
            white-space: nowrap;
            cursor: pointer;
            box-shadow: 0 10px 20px -10px rgba(29, 78, 216, 0.8);
            transition: transform 0.15s ease, box-shadow 0.2s ease, filter 0.2s ease;
        }

        #searchBtn:hover:not(:disabled) {
            transform: translateY(-1px);
            filter: brightness(1.06);
            box-shadow: 0 14px 24px -12px rgba(29, 78, 216, 0.9);
        }

        #searchBtn:active:not(:disabled) {
            transform: translateY(0) scale(0.99);
        }

        #searchBtn:disabled {
            opacity: 0.78;
            cursor: progress;
            transform: none;
        }

        #searchBtn i {
            font-size: 1rem;
        }

        #searchBtn:focus-visible {
            outline: 3px solid var(--ring);
            outline-offset: 2px;
        }

        .clear-btn:focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
        }

        /* ---------- Loading ---------- */
        .loading-spinner {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            padding: 0.9rem 0 0.1rem;
            color: var(--muted);
            font-size: 0.88rem;
        }

        .loading-spinner .spinner-border {
            width: 1.15rem;
            height: 1.15rem;
            border-width: 0.18em;
            color: var(--accent);
        }

        .loading-spinner p {
            margin: 0;
        }

        /* ---------- Result ---------- */
        .result-area {
            margin-top: 1.35rem;
        }

        .word-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.65rem;
        }

        .main-word-badge {
            max-width: 100%;
            overflow-wrap: anywhere;
            padding: 0.32rem 1.05rem;
            border: 1.5px solid var(--accent-line);
            border-radius: 14px;
            background: linear-gradient(140deg, var(--accent-soft), transparent);
            color: var(--accent-strong);
            font-size: clamp(1.02rem, 3.6vw, 1.35rem);
            font-weight: 700;
            line-height: 1.5;
        }

        .sub-count-badge {
            padding: 0.22rem 0.7rem;
            border: 1px solid var(--line);
            border-radius: 999px;
            background: var(--field-bg);
            color: var(--muted);
            font-size: 0.73rem;
            font-weight: 600;
        }

        .meaning-box {
            padding: 1rem 1.15rem;
            min-height: 64px;
            border: 1px solid var(--accent);
            border-radius: 14px;
            background: var(--surface-soft);
        }

        .meaning-box .meaning-text {
            font-size: clamp(1.02rem, 3vw, 1.16rem);
            font-weight: 500;
            line-height: 1.6;
            color: var(--text);
            overflow-wrap: anywhere;
        }

        .meaning-box .no-meaning {
            color: var(--muted);
            font-style: italic;
        }

        .meaning-box .error-text {
            color: var(--danger);
            font-weight: 500;
        }

        /* ---------- Word details (POS / examples / synonyms) ---------- */
        .phonetic {
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
            margin-top: 0.35rem;
            padding: 0.08rem 0.55rem;
            border: 1px dashed var(--line);
            border-radius: 999px;
            color: var(--muted);
            font-size: 0.8rem;
            font-weight: 500;
        }

        .phonetic i {
            font-size: 0.75rem;
            color: var(--accent);
        }

        .pos-blocks {
            margin-top: 0.7rem;
        }

        .pos-block {
            padding: 0.6rem 0.85rem;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: var(--item-bg);
        }

        .pos-block + .pos-block {
            margin-top: 0.45rem;
        }

        .pos-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
            padding: 0.14rem 0.62rem;
            border: 1px solid var(--accent-line);
            border-radius: 999px;
            background: var(--accent-soft);
            color: var(--accent-strong);
            font-size: 0.7rem;
            font-weight: 700;
            line-height: 1.6;
            overflow-wrap: anywhere;
        }

        .pos-badge i {
            font-size: 0.62rem;
        }

        .def-list {
            margin: 0.45rem 0 0;
            padding-left: 1.15rem;
        }

        .def-list li {
            font-size: 0.88rem;
            line-height: 1.55;
            color: var(--text);
            overflow-wrap: anywhere;
        }

        .def-list li + li {
            margin-top: 0.3rem;
        }

        .def-example {
            margin-top: 0.15rem;
            color: var(--muted);
            font-size: 0.82rem;
            font-style: italic;
            line-height: 1.55;
            overflow-wrap: anywhere;
        }

        .def-example i {
            font-size: 0.7rem;
            font-style: normal;
            color: var(--accent);
        }

        .sem-row {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 0.4rem;
            margin-top: 0.6rem;
        }

        .sem-row + .sem-row {
            margin-top: 0.4rem;
        }

        .sem-label {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            min-width: 104px;
            padding-top: 0.28rem;
            font-size: 0.7rem;
            font-weight: 700;
            color: var(--muted);
            white-space: nowrap;
        }

        .sem-label i {
            font-size: 0.7rem;
        }

        .sem-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 0.35rem;
        }

        .syn-chip {
            border-color: rgba(22, 163, 74, 0.45);
            color: var(--success);
        }

        .syn-chip:hover {
            border-color: var(--success);
        }

        .ant-chip {
            border-color: rgba(220, 38, 38, 0.45);
            color: var(--danger);
        }

        .ant-chip:hover {
            border-color: var(--danger);
        }

        .pos-tag {
            margin-left: 0.25rem;
            padding: 0.03rem 0.45rem;
            border: 1px solid var(--line);
            border-radius: 999px;
            background: var(--surface-soft);
            color: var(--muted);
            font-size: 0.6rem;
            font-weight: 600;
            white-space: nowrap;
        }

        /* ---------- Sub words ---------- */
        .sub-section {
            margin-top: 1.5rem;
        }

        .sub-header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 0.5rem;
            margin-bottom: 0.8rem;
            padding-bottom: 0.6rem;
            border-bottom: 1px dashed var(--line);
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text);
        }

        .sub-header>span:first-child {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            min-width: 0;
        }

        .sub-header i.bi-diagram-3 {
            color: var(--accent);
        }

        .api-status {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.16rem 0.6rem;
            border: 1px solid var(--line);
            border-radius: 999px;
            background: var(--surface-soft);
            color: var(--muted);
            font-size: 0.68rem;
            font-weight: 600;
            white-space: nowrap;
        }

        .api-status i {
            font-size: 0.4rem;
        }

        .api-status .text-success {
            color: var(--success) !important;
        }

        .api-status .text-danger {
            color: var(--danger) !important;
        }

        .sub-list {
            display: grid;
            gap: 0.55rem;
        }

        .sub-list .empty-state {
            grid-column: 1 / -1;
        }

        @media (min-width: 600px) {
            .sub-list {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                align-content: start;
                max-height: 440px;
                overflow-y: auto;
                padding-right: 0.3rem;
            }

            .sub-list::-webkit-scrollbar {
                width: 6px;
            }

            .sub-list::-webkit-scrollbar-track {
                background: var(--surface-soft);
                border-radius: 10px;
            }

            .sub-list::-webkit-scrollbar-thumb {
                background: var(--accent-line);
                border-radius: 10px;
            }
        }

        .sub-item {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            align-items: center;
            gap: 0.3rem 0.7rem;
            padding: 0.6rem 0.8rem;
            border: 1px solid var(--line);
            border-radius: 14px;
            background: var(--item-bg);
            overflow-wrap: anywhere;
            transition: background 0.15s ease, border-color 0.15s ease, transform 0.15s ease;
        }

        .sub-item.has-def {
            cursor: pointer;
        }

        .sub-item.has-def:hover,
        .sub-item.has-def:focus-within {
            border-color: var(--accent-line);
            background: var(--item-hover);
        }

        .sub-item.has-def:active {
            transform: scale(0.995);
        }

        .sub-item .sub-word {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            min-width: 0;
            font-size: 0.97rem;
            font-weight: 600;
            color: var(--text);
            overflow-wrap: anywhere;
        }

        .sub-item .sub-word i {
            flex: none;
            font-size: 0.64rem;
            color: var(--accent);
            transition: transform 0.2s ease;
        }

        .sub-item.show-def .sub-word i {
            transform: rotate(90deg);
        }

        .sub-item .sub-meaning {
            justify-self: end;
            max-width: 100%;
            padding: 0.22rem 0.65rem;
            border: 1px solid transparent;
            border-radius: 999px;
            background: var(--surface-soft);
            color: var(--muted);
            font-size: 0.82rem;
            font-weight: 500;
            line-height: 1.5;
            text-align: right;
            word-break: break-word;
        }

        .sub-item .sub-meaning.has-meaning {
            border-color: var(--accent-line);
            background: var(--accent-soft);
            color: var(--accent-strong);
        }

        .sub-item .sub-meaning.no-meaning {
            background: transparent;
            color: var(--muted);
            font-style: italic;
        }

        .sub-item .sub-meaning.loading-meaning {
            background: var(--warn-bg);
            color: var(--warn-text);
            font-style: italic;
        }

        .def-tooltip {
            grid-column: 1 / -1;
            display: none;
            margin-top: 0.15rem;
            padding-top: 0.45rem;
            border-top: 1px dashed var(--line);
            color: var(--muted);
            font-size: 0.8rem;
            line-height: 1.55;
            overflow-wrap: anywhere;
        }

        .sub-item.show-def .def-tooltip {
            display: block;
        }

        .empty-state {
            padding: 1.6rem 1rem;
            border: 1.5px dashed var(--line);
            border-radius: 16px;
            background: var(--surface-soft);
            color: var(--muted);
            font-size: 0.92rem;
            line-height: 1.65;
            text-align: center;
        }

        .empty-state i {
            display: block;
            margin-bottom: 0.4rem;
            font-size: 1.6rem;
            color: var(--accent);
            opacity: 0.7;
        }

        .empty-state span {
            font-size: 0.85rem;
            color: var(--muted);
        }

        /* ---------- Footer ---------- */
        .footer-note {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1.4rem;
            padding-top: 0.95rem;
            border-top: 1px solid var(--line);
            font-size: 0.82rem;
            color: var(--muted);
        }

        .footer-label {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--text);
        }

        .footer-label i {
            color: #f59e0b;
        }

        .chips {
            display: flex;
            flex-wrap: wrap;
            gap: 0.4rem;
        }

        .chip {
            padding: 0.22rem 0.65rem;
            border: 1px solid var(--line);
            border-radius: 999px;
            background: var(--item-bg);
            color: var(--muted);
            font-family: inherit;
            font-size: 0.78rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.15s ease, border-color 0.15s ease, color 0.15s ease;
        }

        .chip:hover {
            border-color: var(--accent-line);
            background: var(--accent-soft);
            color: var(--accent-strong);
        }

        .chip:active {
            transform: scale(0.97);
        }

        .chip:focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
        }

        /* ---------- Credit ---------- */
        .credit {
            margin-top: 1rem;
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--muted);
            text-align: right;
            letter-spacing: 0.01em;
        }

        .credit i {
            margin: 0 0.1rem;
            color: #ef4444;
            font-size: 0.7rem;
        }

        .credit span {
            font-weight: 600;
            color: var(--text);
        }

        /* ---------- Mobile tuning ---------- */
        @media (max-width: 640px) {
            .main-card {
                border-radius: 22px;
                padding: 1.15rem 1rem;
            }

            .app-header {
                gap: 0.7rem;
                margin-bottom: 1.15rem;
            }

            .result-area {
                margin-top: 1.1rem;
            }

            .sub-section {
                margin-top: 1.25rem;
            }

            .sub-header {
                font-size: 0.84rem;
            }

            .footer-note {
                gap: 0.45rem;
            }

            .clear-btn {
                width: 36px;
                height: 36px;
            }

            .chip {
                padding: 0.35rem 0.8rem;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 460px) {
            .sub-item {
                grid-template-columns: 1fr;
            }

            .sub-item .sub-meaning {
                justify-self: start;
                margin-top: 0.05rem;
                text-align: left;
            }
        }

        @media (max-width: 430px) {
            .search {
                padding-left: 0.85rem;
            }

            #searchBtn {
                width: 46px;
                height: 46px;
                padding: 0;
                border-radius: 50%;
            }

            #searchBtn .btn-label {
                display: none;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.001ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.001ms !important;
            }
        }
    </style>
</head>

<body>
    <main class="app">
        <section class="main-card" aria-labelledby="appTitle">
            <header class="app-header">
                <div class="header-icon" aria-hidden="true">
                    <i class="bi bi-translate"></i>
                </div>
                <div class="header-text">
                    <h1 class="main-title" id="appTitle">
                        ইংরেজি → বাংলা
                        <span class="title-en">অভিধান</span>
                    </h1>
                    <div class="header-meta">
                        <span class="status-pill">
                            <span class="status-dot" aria-hidden="true"></span> API সংযুক্ত
                        </span>
                        <span class="live-pill">
                            <i class="bi bi-broadcast" aria-hidden="true"></i> Live
                        </span>
                    </div>
                </div>
                <button type="button" class="theme-toggle" id="themeToggle" aria-label="থিম পরিবর্তন" title="Light / Dark mode">
                    <i id="themeIcon" aria-hidden="true"></i>
                </button>
            </header>

            <form class="search" id="searchForm" role="search">
                <i class="bi bi-search search-icon" aria-hidden="true"></i>
                <label for="wordInput" class="visually-hidden">ইংরেজি শব্দ লিখুন</label>
                <input type="text" id="wordInput" inputmode="search" autocomplete="off" autocapitalize="off"
                    spellcheck="false" placeholder="যেকোনো ইংরেজি শব্দ লিখুন..." />
                <button type="button" class="clear-btn" id="clearBtn" aria-label="লেখা মুছুন" hidden>
                    <i class="bi bi-x-lg" aria-hidden="true"></i>
                </button>
                <button type="submit" id="searchBtn" aria-label="শব্দ খুঁজুন">
                    <i class="bi bi-search" aria-hidden="true"></i>
                    <span class="btn-label">খুঁজুন</span>
                </button>
            </form>

            <div class="loading-spinner" id="loadingSpinner" role="status" aria-live="polite" hidden>
                <div class="spinner-border" aria-hidden="true"></div>
                <p>API থেকে ডেটা আনা হচ্ছে...</p>
            </div>

            <div class="result-area">
                <div id="mainResult">
                    <div class="word-row">
                        <span class="main-word-badge" id="mainWordDisplay">—</span>
                        <span class="sub-count-badge" id="subCount">বৈধ শব্দ: 0</span>
                    </div>
                    <div class="meaning-box" aria-live="polite">
                        <span class="meaning-text" id="mainMeaning">অর্থ দেখতে একটি শব্দ লিখুন</span>
                    </div>
                </div>

                <div class="sub-section">
                    <div class="sub-header">
                        <span>
                            <i class="bi bi-diagram-3" aria-hidden="true"></i>
                            আসল ইংরেজি sub-word (৩+ অক্ষর)
                        </span>
                        <span class="api-status" id="apiStatus">
                            <i class="bi bi-circle-fill text-success" aria-hidden="true"></i> API সচল
                        </span>
                    </div>
                    <div class="sub-list" id="subListContainer">
                        <div class="empty-state">
                            <i class="bi bi-arrow-down-circle" aria-hidden="true"></i>
                            উপরের বক্সে একটি শব্দ দিন<br />
                            <span>API থেকে রিয়েল-টাইম ডেটা আসবে</span>
                        </div>
                    </div>
                </div>

                <footer class="footer-note">
                    <span class="footer-label">
                        <i class="bi bi-lightbulb-fill" aria-hidden="true"></i> উদাহরণ:
                    </span>
                    <div class="chips" id="exampleHint">
                        <button type="button" class="chip" data-word="Check">Check</button>
                        <button type="button" class="chip" data-word="Hello">Hello</button>
                        <button type="button" class="chip" data-word="Computer">Computer</button>
                        <button type="button" class="chip" data-word="Freedom">Freedom</button>
                        <button type="button" class="chip" data-word="Science">Science</button>
                    </div>
                </footer>

                <p class="credit">
                    <span style="font-style: italic;">Developed by <a href="https://www.mlalonhossain.com/" target="_blank"
                            style="color: var(--accent);text-decoration: underline;font-weight: normal;">Farabie IT</a></span>
                </p>
            </div>
        </section>
    </main>

    <script>
        $(function () {
            const THEME_KEY = 'theme';

            function applyTheme(theme, persist) {
                document.documentElement.setAttribute('data-theme', theme);
                $('#themeIcon').attr('class', theme === 'dark' ? 'bi bi-sun-fill' : 'bi bi-moon-stars-fill');
                document.querySelectorAll('meta[name="theme-color"]').forEach(function (meta) {
                    meta.removeAttribute('media');
                    meta.setAttribute('content', theme === 'dark' ? '#0b1220' : '#eef2ff');
                });
                if (persist) {
                    try { localStorage.setItem(THEME_KEY, theme); } catch (e) { }
                }
            }

            let storedTheme = null;
            try { storedTheme = localStorage.getItem(THEME_KEY); } catch (e) { }
            const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            applyTheme(storedTheme === 'dark' || storedTheme === 'light' ? storedTheme : (prefersDark ? 'dark' : 'light'), false);

            $('#themeToggle').on('click', function () {
                applyTheme(document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark', true);
            });

            const DICTIONARY_API = 'https://api.dictionaryapi.dev/api/v2/entries/en/';
            const TRANSLATE_API = 'https://api.mymemory.translated.net/get';
            const MIN_SUB_LENGTH = 3;
            const BATCH_SIZE = 4;

            const DICT_CACHE = JSON.parse(localStorage.getItem('dictCache_v2') || '{}');
            const TRANSLATE_CACHE = JSON.parse(localStorage.getItem('transCache') || '{}');
            let searchToken = 0;

            function escapeHtml(value) {
                return String(value == null ? '' : value).replace(/[&<>"']/g, function (ch) {
                    return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[ch];
                });
            }

            function saveCaches() {
                try {
                    localStorage.setItem('dictCache_v2', JSON.stringify(DICT_CACHE));
                    localStorage.setItem('transCache', JSON.stringify(TRANSLATE_CACHE));
                } catch (e) { }
            }

            function generateSubWords(word) {
                const clean = word.trim().toLowerCase();
                if (!clean) return [];

                const result = [];
                const seen = new Set();

                for (let start = 0; start < clean.length; start++) {
                    for (let end = start + 1; end <= clean.length; end++) {
                        const sub = clean.substring(start, end);
                        if (sub.length >= MIN_SUB_LENGTH && !seen.has(sub)) {
                            seen.add(sub);
                            result.push(sub);
                        }
                    }
                }

                return result.sort((a, b) => {
                    if (a.length !== b.length) return b.length - a.length;
                    return a.localeCompare(b);
                });
            }

            function fetchDictionary(word) {
                word = word.trim().toLowerCase();
                if (!word) return Promise.resolve({ found: false, meanings: [], phonetic: '' });

                if (DICT_CACHE[word]) return Promise.resolve(DICT_CACHE[word]);

                return $.ajax({
                    url: DICTIONARY_API + encodeURIComponent(word),
                    method: 'GET',
                    dataType: 'json',
                    timeout: 10000
                }).then(function (data) {
                    const meanings = [];
                    let phonetic = '';

                    if (Array.isArray(data) && data.length) {
                        data.forEach(entry => {
                            if (!phonetic && entry.phonetic) phonetic = entry.phonetic;

                            (entry.meanings || []).forEach(meaning => {
                                const definitions = (meaning.definitions || [])
                                    .filter(def => def.definition)
                                    .slice(0, 3)
                                    .map(def => ({
                                        definition: def.definition,
                                        example: def.example || ''
                                    }));

                                const synonyms = [...new Set([
                                    ...(meaning.synonyms || []),
                                    ...(meaning.definitions || []).flatMap(def => def.synonyms || [])
                                ])].slice(0, 8);

                                const antonyms = [...new Set([
                                    ...(meaning.antonyms || []),
                                    ...(meaning.definitions || []).flatMap(def => def.antonyms || [])
                                ])].slice(0, 8);

                                if (!definitions.length && !synonyms.length && !antonyms.length) return;

                                meanings.push({
                                    pos: meaning.partOfSpeech || '',
                                    definitions: definitions,
                                    synonyms: synonyms,
                                    antonyms: antonyms
                                });
                            });
                        });
                    }

                    const result = { found: meanings.length > 0, meanings: meanings.slice(0, 4), phonetic: phonetic };
                    DICT_CACHE[word] = result;
                    saveCaches();
                    return result;
                }).catch(function () {
                    const result = { found: false, meanings: [], phonetic: '', apiError: true };
                    DICT_CACHE[word] = result;
                    return result;
                });
            }

            function translateToBangla(word) {
                word = word.trim().toLowerCase();
                if (!word) return Promise.resolve('');

                if (TRANSLATE_CACHE[word]) return Promise.resolve(TRANSLATE_CACHE[word]);

                return $.ajax({
                    url: TRANSLATE_API,
                    method: 'GET',
                    dataType: 'json',
                    timeout: 12000,
                    data: { q: word, langpair: 'en|bn' }
                }).then(function (data) {
                    let translation = '';
                    if (data && data.responseData && data.responseData.translatedText) {
                        translation = data.responseData.translatedText.trim();
                    }
                    translation = $('<textarea>').html(translation).val();
                    TRANSLATE_CACHE[word] = translation;
                    saveCaches();
                    return translation;
                }).catch(function () {
                    return '';
                });
            }

            async function processWord(word) {
                const dictionary = await fetchDictionary(word);
                if (!dictionary.found) {
                    return { word, found: false, meaning: '', meanings: [], phonetic: '' };
                }
                const meaning = await translateToBangla(word);
                return {
                    word,
                    found: true,
                    meaning: meaning || 'বাংলা অর্থ পাওয়া যায়নি',
                    meanings: dictionary.meanings,
                    phonetic: dictionary.phonetic || ''
                };
            }

            const POS_BN = {
                noun: 'বিশেষ্য',
                verb: 'ক্রিয়া',
                adjective: 'বিশেষণ',
                adverb: 'ক্রিয়া-বিশেষণ',
                pronoun: 'সর্বনাম',
                preposition: 'অব্যয়',
                conjunction: 'সংযোজক',
                interjection: 'অবিস্ময়ক',
                exclamation: 'অবিস্ময়ক',
                determiner: 'নির্ধারক',
                numeral: 'সংখ্যা',
                particle: 'কণা'
            };

            function posLabel(pos) {
                pos = (pos || '').toLowerCase();
                if (POS_BN[pos]) return POS_BN[pos] + ' · ' + pos;
                return pos || '';
            }

            function semRowHTML(label, words, chipClass) {
                if (!words || !words.length) return '';
                const chips = words.map(word =>
                    `<button type="button" class="chip sem-chip ${chipClass}" data-word="${escapeHtml(word)}">${escapeHtml(word)}</button>`
                ).join('');
                return `
                    <div class="sem-row">
                        <span class="sem-label">${label}</span>
                        <div class="sem-chips">${chips}</div>
                    </div>
                `;
            }

            async function renderMainWord(word, token) {
                const result = await processWord(word);
                if (token !== searchToken) return;

                if (!result.found) {
                    $('#mainMeaning').html('<span class="no-meaning">এই শব্দটি Dictionary API-তে পাওয়া যায়নি।</span>');
                    return;
                }

                const posBlocks = result.meanings.map(meaning => {
                    const items = meaning.definitions.map(def =>
                        `<li>${escapeHtml(def.definition)}${def.example ? `<div class="def-example"><i class="bi bi-quote" aria-hidden="true"></i> ${escapeHtml(def.example)}</div>` : ''}</li>`
                    ).join('');
                    return `
                        <div class="pos-block">
                            <span class="pos-badge"><i class="bi bi-tag-fill" aria-hidden="true"></i>${escapeHtml(posLabel(meaning.pos))}</span>
                            ${items ? `<ol class="def-list">${items}</ol>` : ''}
                        </div>
                    `;
                }).join('');

                const syns = [...new Set(result.meanings.flatMap(meaning => meaning.synonyms))].slice(0, 8);
                const ants = [...new Set(result.meanings.flatMap(meaning => meaning.antonyms))].slice(0, 8);

                $('#mainMeaning').html(`
                    <span class="meaning-text">${escapeHtml(result.meaning)}</span>
                    ${result.phonetic ? `<div class="phonetic"><i class="bi bi-volume-up" aria-hidden="true"></i> ${escapeHtml(result.phonetic)}</div>` : ''}
                    ${posBlocks ? `<div class="pos-blocks">${posBlocks}</div>` : ''}
                    ${semRowHTML('<i class="bi bi-plus-circle" aria-hidden="true"></i> সমগোত্র শব্দ', syns, 'syn-chip')}
                    ${semRowHTML('<i class="bi bi-dash-circle" aria-hidden="true"></i> বিপরীত শব্দ', ants, 'ant-chip')}
                `);
            }

            async function renderSubWords(subWords, token) {
                const container = $('#subListContainer');
                container.empty();

                if (!subWords.length) {
                    container.html(`
                        <div class="empty-state">
                            <i class="bi bi-info-circle"></i>
                            কোনো valid sub-word পাওয়া যায়নি
                        </div>
                    `);
                    return;
                }

                let validCount = 0;

                for (let i = 0; i < subWords.length; i += BATCH_SIZE) {
                    if (token !== searchToken) return;

                    const batch = subWords.slice(i, i + BATCH_SIZE);

                    batch.forEach(word => {
                        container.append(`
                            <div class="sub-item" data-word="${escapeHtml(word)}">
                                <span class="sub-word">
                                    <i class="bi bi-chevron-right"></i>${escapeHtml(word)}
                                </span>
                                <span class="sub-meaning loading-meaning">খুঁজছি...</span>
                            </div>
                        `);
                    });

                    const results = await Promise.all(batch.map(w => processWord(w)));
                    if (token !== searchToken) return;

                    results.forEach(result => {
                        const row = container.find(`.sub-item[data-word="${CSS.escape(result.word)}"]`).last();
                        if (!row.length) return;

                        const meaningEl = row.find('.sub-meaning');

                        if (result.found) {
                            validCount++;
                            meaningEl
                                .removeClass('loading-meaning no-meaning')
                                .addClass('has-meaning')
                                .html(escapeHtml(result.meaning));

                            const firstMeaning = result.meanings[0];
                            if (firstMeaning && firstMeaning.pos) {
                                row.find('.sub-word').append(`<span class="pos-tag">${escapeHtml(posLabel(firstMeaning.pos))}</span>`);
                            }

                            const entry = (firstMeaning ? firstMeaning.definitions : []).find(def => def.definition);
                            if (entry) {
                                row.addClass('has-def');
                                row.append(`<div class="def-tooltip">${escapeHtml(entry.definition)}${entry.example ? ` — <em>${escapeHtml(entry.example)}</em>` : ''}</div>`);
                                row.on('click', function () {
                                    $(this).toggleClass('show-def');
                                });
                            }
                        } else {
                            row.remove();
                        }
                    });

                    $('#subCount').text('বৈধ শব্দ: ' + validCount);
                }

                if (validCount === 0) {
                    container.html(`
                        <div class="empty-state">
                            <i class="bi bi-info-circle"></i>
                            কোনো আসল ইংরেজি sub-word পাওয়া যায়নি
                        </div>
                    `);
                }
            }

            async function renderWord(input) {
                const word = input.trim();
                if (!word) {
                    resetUI();
                    return;
                }

                const token = ++searchToken;
                showLoading(true);

                $('#mainWordDisplay').text(word);
                $('#mainMeaning').html('<span class="no-meaning">API থেকে বাংলা অর্থ আনা হচ্ছে...</span>');
                $('#subListContainer').html(`
                    <div class="empty-state">
                        <i class="bi bi-hourglass-split"></i>
                        শব্দগুলো বিশ্লেষণ করা হচ্ছে...
                    </div>
                `);
                $('#subCount').text('বৈধ শব্দ: 0');

                try {
                    await renderMainWord(word, token);
                    if (token !== searchToken) return;

                    const subWords = generateSubWords(word);
                    await renderSubWords(subWords, token);

                    if (token !== searchToken) return;

                    $('#apiStatus').html(`
                        <i class="bi bi-circle-fill text-success"></i> API সচল
                    `);
                } catch (error) {
                    if (token !== searchToken) return;
                    console.error(error);
                    $('#mainMeaning').html(`
                        <span class="error-text">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            API সংযোগে সমস্যা হয়েছে।
                        </span>
                    `);
                    $('#subListContainer').html(`
                        <div class="empty-state">
                            <i class="bi bi-wifi-off"></i>
                            API থেকে ডেটা পাওয়া যায়নি
                        </div>
                    `);
                    $('#apiStatus').html(`
                        <i class="bi bi-circle-fill text-danger"></i> API সমস্যা
                    `);
                } finally {
                    if (token === searchToken) showLoading(false);
                }
            }

            function resetUI() {
                ++searchToken;
                $('#mainWordDisplay').text('—');
                $('#mainMeaning').html('অর্থ দেখতে একটি শব্দ লিখুন');
                $('#subCount').text('বৈধ শব্দ: 0');
                $('#subListContainer').html(`
                    <div class="empty-state">
                        <i class="bi bi-arrow-down-circle"></i>
                        উপরের বক্সে একটি শব্দ দিন<br />
                        <span>API থেকে রিয়েল-টাইম ডেটা আসবে</span>
                    </div>
                `);
                showLoading(false);
            }

            function showLoading(show) {
                const $btn = $('#searchBtn');
                $('#loadingSpinner').prop('hidden', !show);
                $btn.prop('disabled', show);
                $btn.find('.btn-label').text(show ? 'লোড...' : 'খুঁজুন');
                $btn.find('i').attr('class', show ? 'bi bi-hourglass-split' : 'bi bi-search');
            }

            function syncClearButton() {
                $('#clearBtn').prop('hidden', !$('#wordInput').val().trim());
            }

            function performSearch() {
                renderWord($('#wordInput').val());
            }

            $('#searchForm').on('submit', function (e) {
                e.preventDefault();
                performSearch();
            });

            $('#wordInput').on('input', syncClearButton);

            $('#clearBtn').on('click', function () {
                $('#wordInput').val('');
                syncClearButton();
                $('#wordInput').trigger('focus');
                resetUI();
            });

            $('#exampleHint').on('click', '.chip', function () {
                $('#wordInput').val($(this).attr('data-word'));
                syncClearButton();
                performSearch();
            });

            $('#mainResult').on('click', '.sem-chip', function () {
                const word = $(this).attr('data-word');
                if (!word) return;
                $('#wordInput').val(word);
                syncClearButton();
                performSearch();
            });

            const defaultWord = 'Check';
            $('#wordInput').val(defaultWord);
            syncClearButton();
            renderWord(defaultWord);

            if (window.matchMedia('(pointer: fine)').matches) {
                $('#wordInput').trigger('focus');
            }
        });
    </script>
</body>

</html>