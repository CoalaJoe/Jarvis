import json
from nltk.tag import StanfordPOSTagger
tagger = StanfordPOSTagger('german-fast.tagger')
tagged_text = tagger.tag("Das ist doch toll!".split())

json_values = json.dumps(tagged_text)

print(json_values)
