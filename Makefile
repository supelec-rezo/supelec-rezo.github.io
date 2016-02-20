LANGUAGES=en_US
LOCALE_DIR=Locale

MOS=$(addprefix $(LOCALE_DIR)/, $(addsuffix /LC_MESSAGES/messages.mo, $(LANGUAGES)))

all: $(MOS)

%.mo: %.po
	msgfmt $< -o $@

%.po: messages.pot dirs
	-[ -e $@ ] && msgmerge --width=110 --update $@ $<
	[ -e $@ ] || cp $< $@

dirs:
	mkdir -p $(addprefix $(LOCALE_DIR)/, $(addsuffix /LC_MESSAGES, $(LANGUAGES)))

messages.pot: 
	xgettext --from-code=UTF-8 -o messages.pot *.php */*.php */*/*.php
