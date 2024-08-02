from telegram import InlineKeyboardButton, InlineKeyboardMarkup, Update
from telegram.ext import Updater, CommandHandler, CallbackContext
import requests

def start(update: Update, context: CallbackContext):
    # Extract username and referrer from the /start command
    parts = update.message.text.split(' ')
    referrer = parts[1] if len(parts) > 1 else None
    username = update.message.from_user.username

    if referrer and referrer != username:
        # Track the referral
        requests.post('https://neoncoinapp.protocolconfig.app/track_referral.php', json={'referrer': referrer, 'referee': username})

    # Create the web app URL with username and referrer as query parameters
    web_app_url = f"https://neoncoinapp.protocolconfig.app?username={username}&referrer={referrer}"

    # Create an inline keyboard with a button that opens the web app
    keyboard = [[InlineKeyboardButton("Play", url=web_app_url)]]
    reply_markup = InlineKeyboardMarkup(keyboard)

    # Send a welcome message with the button
    update.message.reply_text('Welcome! Click the button below to start.', reply_markup=reply_markup)

def main():
    # Set up the Telegram bot
    updater = Updater("6544347155:AAHrmACN93gWf7hiXSgRA3HPSTFZmeYlxz0", use_context=True)
    dp = updater.dispatcher

    # Register the /start command handler
    dp.add_handler(CommandHandler("start", start))

    # Start polling for updates
    updater.start_polling()
    updater.idle()

if __name__ == '__main__':
    main()

